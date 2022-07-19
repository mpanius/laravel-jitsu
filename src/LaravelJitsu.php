<?php

namespace Mpanius\LaravelJitsu;

use Illuminate\Support\Facades\Http;

class LaravelJitsu
{
    public array $api_keys;

    public string $jitsu_url;

    protected bool $jitsu_secure;

    public static function push(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        $data['event_name'] = $event_name;

        $url = (config('jitsu.secure') ? 'https://' : 'http://').config('jitsu.url').'?token='.config('jitsu.keys.'.$api_key_name.'.server');

        return Http::post($url, $data);
    }
}
