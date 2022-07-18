<?php

// config for Mpanius/LaravelJitsu
return [
    // Url of your main Jitsu endpoint
    'url' => env('JITSU_ENDPOINT'),
    'keys' => [
        'default' => [
            'server' => env('JITSU_SERVER_KEY'),
            'js' => env('JITSU_JS_KEY'),
        ],
    ],
];
