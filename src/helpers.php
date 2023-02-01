<?php

if (! function_exists('jitsu')) {
    /**
     * Server side push data to jitsu
     *
     * @param  array  $data  data to push to jitsu
     * @param  string  $event_name  name of the event, default will be just 'event'
     * @param  string  $api_key_name  can be 'default' or any configured api key
     * @return mixed
     */
    function jitsu(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        if(!config('jitsu.disabled'))
            return app(\Mpanius\LaravelJitsu\LaravelJitsu::class)->push($data, $event_name, $api_key_name);
    }
}
