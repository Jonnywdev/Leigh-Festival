const { SNSClient, PublishCommand } = require('@aws-sdk/client-sns');
const querystring = require('node:querystring');

/**
 * SNS Topic we're publishing to
 */
const TOPIC_ARN = process.env.TOPIC_ARN;

module.exports.contactForm = async (event, context) => {

    // We define this so people can spam their own Subjects
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

    const buffer = new Buffer(event.body, 'base64');
    const b64Decoded = buffer.toString();
    const frmDecoded = querystring.parse(b64Decoded);

    console.log(event, b64Decoded, frmDecoded);
    if (!vaildSubjects.hasOwnProperty(frmDecoded['subject'])) {
        throw Error('Subject not Valid');
    }
    const snsClient = new SNSClient({});
    const publishCmd = new PublishCommand({
        TopicArn: TOPIC_ARN,
        Subject: `Leigh Festival Contact - ${vaildSubjects[frmDecoded['subject']]}`,
        Message: `Name: ${frmDecoded['name']}\nE-Mail: ${frmDecoded['mail']}\nMessage:\n${frmDecoded['message']}`
    });
    await snsClient.send(publishCmd);
    return {
        "headers": {"Location": "https://leighfestival.uk/contact-thanks.html"},
        "statusCode": 302
    };
};
