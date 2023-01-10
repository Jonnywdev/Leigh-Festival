const { SNSClient, PublishCommand } = require('@aws-sdk/client-sns');
const querystring = require('node:querystring');

/**
 * SNS Topic we're publishing to
 */
const TOPIC_ARN = process.env.TOPIC_ARN;

module.exports.contactForm = async (event, context) => {

    // We define this so people can't spam their own Subjects
    const vaildSubjects = {
        'beer': 'Beer Barrel Sponsorship',
        'glassware': 'Glassware Sponsorship',
        'music': 'Music Sponsorship',
        'main': 'Main Event Sponsorship',
        'bar': 'Bar Sponsorship',
        'rugby': 'Mixed Ability Rugby Sponsorship',
        'token': 'Beer Token Sponsorship',
        'foodvan': 'I have a food van I want to bring',
        'stall': 'I want to set up a stall',
        'other': 'Other Enquiry'
    };

    // Annoyingly API Gateway sees form POSTs as binary data, so we need to base64 decode.
    const buffer = new Buffer(event.body, 'base64');
    const b64Decoded = buffer.toString();

    // Once Base64 is decoded we need to parse out the fields from the form.
    // This is what a POSTed form for us would look like
    // name=Adam+Prescott&mail=adam%40example.com&subject=glassware&message=This+is+a+test+message&submit=Submit
    const frmDecoded = querystring.parse(b64Decoded);

    console.log(event, b64Decoded, frmDecoded);

    // Validate the Subject passed from the user is a valid one
    if (!vaildSubjects.hasOwnProperty(frmDecoded['subject'])) {
        console.log("Subject not Valid");

        // Tell's API Gateway to redirect to the Error page with a 302 Redirect
        return {
            "headers": {"Location": "https://leighfestival.uk/error.html"},
            "statusCode": 302
        };
    }

    // We send the message to AWS Simple Notification Service (SNS).
    // E-mails will need to be added manually to the SNS Topic
    const snsClient = new SNSClient({});
    const publishCmd = new PublishCommand({
        TopicArn: TOPIC_ARN,
        Subject: `Leigh Festival Contact - ${vaildSubjects[frmDecoded['subject']]}`,
        Message: `Name: ${frmDecoded['name']}\nE-Mail: ${frmDecoded['mail']}\nMessage:\n${frmDecoded['message']}`
    });
    await snsClient.send(publishCmd);

    // Redirect to the Thank you page on success
    return {
        "headers": {"Location": "https://leighfestival.uk/contact-thanks.html"},
        "statusCode": 302
    };
};