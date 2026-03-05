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

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'static' => [
        'mobile' => '7300293594',
        'email' => 'jasolrelocation@gmail.com',
        'address' => 'Shop Number 06 Survey Number 261/3/2  Sakhare Dhawale Wasti Near flour mill Laxmi chowk, Hinjawadi Phase 2 Road,  Hinjewadi Phase 1, Pune, Pimpri-Chinchwad, Maharashtra 411057',
        'whatsapp' => '7300293594',
        'facebook' => 'https://www.facebook.com/jasolrelocation',
        'instagram' => 'https://www.instagram.com/jasolrelocation',
        'twitter' => 'https://twitter.com/jasolrelocation',
        'linkedin' => 'https://www.linkedin.com/jasolrelocation',
        'years' => 11,
        'cities' => '500',
        'clients' => '10,000',
        'delivered' => '15,000',
    ],
];
