<?php

    /*
    |--------------------------------------------------------------------------
    | Varibales needed to make connection with other system
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for :
    |   -IRIS API
    |   -Tokens
    |   -SSL verfication
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

return [
    'php_cli_server_workers' => env('PHP_CLI_SERVER_WORKERS', 4),
    'api_token' => env('API_TOKEN', ''),

    'IRIS' => [
        'iris_api' => env('IRIS_API', '')
    ],

    'SSL' => [ 
        'verify_ssl' => env('VERIFY_SSL', false),
    ],

    'interval_seconds' => env('INTERVAL_SECONDS',300), 
];

