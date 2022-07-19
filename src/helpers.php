<?php

if (! function_exists('jitsu')) {
    function jitsu(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        return \Mpanius\LaravelJitsu\LaravelJitsu::push($data, $event_name, $api_key_name);
    }
}
