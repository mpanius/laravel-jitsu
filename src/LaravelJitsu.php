<?php

namespace Mpanius\LaravelJitsu;

use Illuminate\Support\Facades\Http;

class LaravelJitsu
{
    public array $api_keys;

    public string $jitsu_url;

    protected bool $jitsu_secure;

    protected ?string $queue_name;

    public $last_response;

    public function __construct()
    {
        $this->api_keys = config('jitsu.keys');
        $this->jitsu_url = config('jitsu.url');
        $this->jitsu_secure = config('jitsu.secure');
        $this->queue_name = config('jitsu.queue');
    }

    public function push(array $data = [], string $event_name = 'event', string $api_key_name = 'default')
    {
        $data['event_name'] = $event_name;

        $url = ($this->jitsu_secure ? 'https://' : 'http://').$this->jitsu_url.'?token='.$this->api_keys[$api_key_name]['server'];

        if (!is_null($this->queue_name)) {
            dispatch(function () use ($data, $url) {
                Http::withBody(json_encode($data), 'application/json')->post($url);
            })->onQueue($this->queue_name);
            return 'dispatch ok';
        }
        return Http::withBody(json_encode($data), 'application/json')->post($url);


    }
}
