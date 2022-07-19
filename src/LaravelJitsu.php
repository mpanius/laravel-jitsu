<?php

namespace Mpanius\LaravelJitsu;

use Illuminate\Support\Facades\Http;

class LaravelJitsu
{
    public array $api_keys;

    public string $jitsu_url;

    protected bool $jitsu_secure;

    public $last_response;

    public function __construct()
    {
        $this->api_keys = config('jitsu.keys');
        $this->jitsu_url = config('jitsu.url');
        $this->jitsu_secure = config('jitsu.secure');
    }

    public function push(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        $data['event_name'] = $event_name;

        $url = ($this->jitsu_secure ? 'https://' : 'http://').$this->jitsu_url.'?token='.$this->api_keys['$api_key_name']['server'];

        Http::async()->post($url, $data)->then(function ($response) {
            $this->last_response = $response;
        });

        return true;
    }
}
