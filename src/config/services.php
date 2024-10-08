<?php
/*
 * @Author: Huang Chun
 * @Date: 2024-05-06 11:31:02
 * @LastEditors: Haung_Chun kk20210112@gmail.com
 * @LastEditTime: 2024-09-19 13:55:27
 * @FilePath: /yfsys_system/src/config/services.php
 */

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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'telegram-bot-api' => [
        'token' => env('TELEGRAM_LOGGER_BOT_TOKEN', '6227330585:AAEp0SHLR14DwgqcO2bkYzhlv0x1N--O6-c'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
        'client_id' => env('FB_CLIENT_ID'),
        'client_secret' => env('FB_CLIENT_SECRET'),
        'redirect' => config('app.url').'/facebook/authCallback',
    ],

];
