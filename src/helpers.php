<?php

if (! function_exists('jitsu')) {
    function jitsu(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        return app(\Mpanius\LaravelJitsu\LaravelJitsu::class)->push($data, $event_name, $api_key_name);
    }
}
