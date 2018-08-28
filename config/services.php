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

    'igdb' => [
        'key' => env('YOUR_IGDB_KEY'),
        'url' => env('YOUR_IGDB_URL')
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_PUBLISHABLE_SECRET','pk_test_RCTcGzwBA1YDQGzZIhHntIpv'),
        'secret' => env('STRIPE_SECRET','sk_test_v8pnOkQ6BFgyw9ZaI0MqgVnF'),
    ],


];
