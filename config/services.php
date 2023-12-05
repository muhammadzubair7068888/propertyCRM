<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'onfon' => [
        'senderid' => env('ONFON_SMS_SENDER_ID'),
        'apikey' => env('ONFON_SMS_API_KEY'),
        'clientid' => env('ONFON_SMS_CLIENT_ID'),
    ],
    // 'twilio' => [
    //     'sid' => env('TWILIO_SID'),
    //     'token' => env('TWILIO_AUTH_TOKEN'),
    //     'from' => env('TWILIO_PHONE_NUMBER'),
    // ],
    'mpesa' => [
        'url' => env('MPESA_URL'), 
        'key' => env('MPESA_KEY'),
        'secret' => env('MPESA_CONSUMER_SECRET'),
    ],
];
