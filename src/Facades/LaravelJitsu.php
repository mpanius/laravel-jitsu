<?php

namespace Mpanius\LaravelJitsu\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mpanius\LaravelJitsu\LaravelJitsu
 */
class LaravelJitsu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-jitsu';
    }


}
