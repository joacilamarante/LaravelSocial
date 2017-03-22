<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'github' => [
        'client_id' => '5dfdeb9b840ed724c419',
        'client_secret' => 'd7dbf856eb5912ef13042e835efb389cbb001d21',
        'redirect' => 'http://localhost:8000/retorno/github',
],

    'facebook' => [
        'client_id' => '172163056631670',
        'client_secret' => '48d4e4d61b5ab71606a6223f24dc6f59',
        'redirect' => 'http://localhost:8000/retorno/facebook',
],

];
