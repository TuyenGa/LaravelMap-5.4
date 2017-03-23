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

    'facebook' => [
        'client_id' => '1730890343889570',
        'client_secret' => 'ef0b0fb640b7601889fab718d3ab2456',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => '686979328895-osfddc4vsqp8d287grjcejiqf1vh27bb.apps.googleusercontent.com',
        'client_secret' => 'NPX_t4IpjG35onQRxUxSYUnj',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
