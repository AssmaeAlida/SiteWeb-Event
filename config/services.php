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
    'google' => [
        'client_id' => '810786695921-3nbl3jjik1tm8jakh35rucnc5jka6sp1.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/login/google/callback',
    ],
    'facebook' => [
        'client_id' => '660758815714518',
        'client_secret' => '4dfc509e7eccb84a5ca52131d62ceacd',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

];
