<?php

// config for Mpanius/LaravelJitsu
return [
    // Url of your main Jitsu endpoint (without scheme)
    'url' => env('JITSU_ENDPOINT', 'cloud.jitsu.com'),

    // Use https/http
    'secure' => env('JITSU_SECURE_URL', true),

    // Server and JS API keys from your Jitsu installation
    'keys' => [
        // You need at least one Jitsu API keys, named default
        'default' => [
            'server' => env('JITSU_SERVER_KEY'),
            'js' => env('JITSU_JS_KEY'),
        ],
        // You can use secondary Jitsu keys for your data
        /*'secondary' => [
            'server' => '',
            'js' => ''
        ]*/
    ],
];
