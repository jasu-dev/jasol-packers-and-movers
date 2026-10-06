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
        'mobile' => '7058332061',
        'email' => 'jasolrelocation@gmail.com',
        'address' => 'Shop Number 06 Survey Number 261/3/2 Sakhare Dhawale Wasti Near flour mill Laxmi chowk, Hinjawadi Phase 2 Rd, Phase 1, Hinjawadi, Pune, Pimpri-Chinchwad, Maharashtra 411057',
        'whatsapp' => '7058332061',
        'facebook' => 'https://www.facebook.com/jasolrelocation',
        'instagram' => 'https://www.instagram.com/jasolrelocation',
        'twitter' => 'https://twitter.com/jasolrelocation',
        'linkedin' => 'https://www.linkedin.com/jasolrelocation',
        'years' => 11,
        'cities' => '500',
        'clients' => '10,000',
        'delivered' => '15,000',

        'wakad-address' => 'Shop No.4,Near Shree Datta Krupa Battery, Laxmi Chowk Road, Vinode Wasti, Bhumkar Nagar, Wakad, Maharashtra 411057',
        'baner-address' => 'Office No.412, Service Road, near Radha Chowk, next to EFC Prime, Baner, Pune, Maharashtra 411045',

        // Secondary support lines shown in the header/footer.
        'phones' => ['7058332061', '8446105867', '9503493854'],
        'hours' => 'Mo-Su 07:00-22:00',
        'hours_label' => 'Open 7 days a week, 7:00 AM to 10:00 PM (24/7 phone support)',
    ],

    /*
    |--------------------------------------------------------------------------
    | Physical offices (NAP data used for local SEO schema and branch pages)
    |--------------------------------------------------------------------------
    */
    'branches' => [
        'hinjewadi' => [
            'name' => 'Jasol Packers and Movers - Hinjewadi (Head Office)',
            'locality' => 'Hinjewadi',
            'route' => 'home',
            'street' => 'Shop No. 06, Survey No. 261/3/2, Sakhare Dhawale Wasti, Near Flour Mill, Laxmi Chowk, Hinjawadi Phase 2 Road',
            'area' => 'Hinjawadi Phase 1',
            'city' => 'Pune',
            'postal' => '411057',
            'phone' => '7058332061',
            'geo' => ['lat' => 18.599777, 'lng' => 73.730724],
            'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.4287172138324!2d73.73072417546658!3d18.599777066749485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbe21d8277ad%3A0xc73679f5b4ff881a!2sJasol%20Packers%20and%20Movers!5e0!3m2!1sen!2sin!4v1778577504963!5m2!1sen!2sin',
            'map_link' => 'https://www.google.com/maps/search/?api=1&query=Jasol+Packers+and+Movers+Hinjewadi+Pune',
        ],
        'wakad' => [
            'name' => 'Jasol Packers and Movers - Wakad',
            'locality' => 'Wakad',
            'route' => 'wakad',
            'street' => 'Shop No. 4, Near Shree Datta Krupa Battery, Laxmi Chowk Road, Vinode Wasti, Bhumkar Nagar',
            'area' => 'Wakad',
            'city' => 'Pune',
            'postal' => '411057',
            'phone' => '7058332061',
            'geo' => null,
            'map' => 'https://www.google.com/maps?q=Shop+No.4+Near+Shree+Datta+Krupa+Battery+Laxmi+Chowk+Road+Vinode+Wasti+Bhumkar+Nagar+Wakad+Pune+411057&output=embed',
            'map_link' => 'https://www.google.com/maps/search/?api=1&query=Shop+No.4+Near+Shree+Datta+Krupa+Battery+Laxmi+Chowk+Road+Vinode+Wasti+Bhumkar+Nagar+Wakad+Pune+411057',
        ],
        'baner' => [
            'name' => 'Jasol Packers and Movers - Baner',
            'locality' => 'Baner',
            'route' => 'baner',
            'street' => 'Office No. 412, Service Road, Near Radha Chowk, Next to EFC Prime',
            'area' => 'Baner',
            'city' => 'Pune',
            'postal' => '411045',
            'phone' => '7058332061',
            'geo' => null,
            'map' => 'https://www.google.com/maps?q=Office+No.412+Service+Road+near+Radha+Chowk+next+to+EFC+Prime+Baner+Pune+411045&output=embed',
            'map_link' => 'https://www.google.com/maps/search/?api=1&query=Office+No.412+Service+Road+near+Radha+Chowk+next+to+EFC+Prime+Baner+Pune+411045',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Localities we serve (used for schema areaServed and on-page lists)
    |--------------------------------------------------------------------------
    */
    'service_areas' => [
        'Hinjewadi Phase 1', 'Hinjewadi Phase 2', 'Hinjewadi Phase 3', 'Wakad', 'Baner', 'Mahalunge',
        'Marunji', 'Tathawade', 'Punawale', 'Balewadi', 'Pashan', 'Sus', 'Aundh', 'Bavdhan',
        'Thergaon', 'Kalewadi', 'Rahatani', 'Pimple Saudagar', 'Pimple Nilakh', 'Pimpri-Chinchwad', 'Pune',
    ],
];
