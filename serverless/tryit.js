const { DynamoDBClient, ScanCommand, UpdateItemCommand } = require('@aws-sdk/client-dynamodb');

const SCORES_TABLE = process.env.SCORES_TABLE;
const TRYIT_PASSWORD = process.env.TRYIT_PASSWORD;

module.exports.getScores = async (event, context) => {
    const dynamoClient = new DynamoDBClient({});
    const scanCmd = new ScanCommand({
        TableName: SCORES_TABLE
    });

    const clientResponse = await dynamoClient.send(scanCmd);
    console.log(JSON.stringify(clientResponse, null, 2));

    const scores = clientResponse.Items.map((score, i) => {
        return {
            id: score.id.S,
            round: score.round.S,
            pitch: score.pitch.S,
            kickoff: score.kickoff.S,
            team_a: score.team_a.S,
            team_b: score.team_b.S,
            team_a_score: score.team_a_score.S,
            team_b_score: score.team_b_score.S
        }
    });

    return {
        "statusCode": 200,
        "body": JSON.stringify(scores, null, 2)
    }
};

module.exports.updateScore = async (event, context) => {
    const body = JSON.parse(event.body);
    console.log(body);
    if (body['password'] != TRYIT_PASSWORD) {
        return {
            "statusCode": 401,
            "reason": "login required"
        }
    }

    const expectedKeys = [
        "round",
        "pitch",
        "kickoff",
        "team_a",
        "team_b",
        "team_a_score",
        "team_b_score",
    ];

    if (!expectedKeys.every(r => Object.keys(body).includes(r))) {
        return {
            "statusCode": 400,
            "body": JSON.stringify({success: false, reason: "Missing Input"})
        }
    }

    const dynamoClient = new DynamoDBClient({});
    const updateScore = new UpdateItemCommand({
        TableName: SCORES_TABLE,
        Key: {
            id: {S: body['id']}
        },
        UpdateExpression: "SET round = :round, pitch = :pitch, kickoff = :kickoff, team_a = :team_a, team_b = :team_b, team_a_score = :team_a_score, team_b_score = :team_b_score",
        ExpressionAttributeValues: {
            ":round": {S: body['round']},
            ":pitch": { S: body['pitch']},
            ":kickoff": { S: body['kickoff']},
            ":team_a": { S: body['team_a']},
            ":team_b": { S: body['team_b']},
            ":team_a_score": { N: body['team_a_score']},
            ":team_b_score": { N: body['team_b_score']}
        },
        ReturnValues: "UPDATED_NEW"
    });

    try {
        const response = await dynamoClient.send(updateScore);
        console.log(JSON.stringify(response));
    } catch (e) {
        console.log(e);
        return {
            "statusCode": 500,
            "body": JSON.stringify({success: false, reason: e.message})
        }
    }

    return {
        "statusCode": 200,
        "body": JSON.stringify({success: true})
    }
};
