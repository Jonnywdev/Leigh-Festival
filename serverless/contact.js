const { SNSClient, PublishCommand } = require('@aws-sdk/client-sns');

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

    console.log(event);
    /*const snsClient = new SNSClient({});
    const publishCmd = new PublishCommand({
        TopicArn: TOPIC_ARN,
        Subject: `Leigh Festival Contact - ${vaildSubjects[]}`
    });*/
};
