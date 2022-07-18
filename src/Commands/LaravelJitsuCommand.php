<?php

namespace Mpanius\LaravelJitsu\Commands;

use Illuminate\Console\Command;

class LaravelJitsuCommand extends Command
{
    public $signature = 'laravel-jitsu';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
