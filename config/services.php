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

    'github' => [
        'client_id' => env('f3de5c07d4fef9326f37'),
        'client_secret' => env('dd8bc6ec85a4a97532e1480026c2bf91a4fd773c'),
        'redirect' => 'http://127.0.0.1:8000/callback-url',
    ],

    'google' => [
        'client_id' => env('96906324088-7a24c6v0ghu9jh4sk76gp4i2ddvjb5l7.apps.googleusercontent.com'),
        'client_secret' => env('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'),
        'redirect' => 'http://127.0.0.1:8000/callback/google',
    ],

];
