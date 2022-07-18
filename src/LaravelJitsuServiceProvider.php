<?php

namespace Mpanius\LaravelJitsu;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mpanius\LaravelJitsu\Commands\LaravelJitsuCommand;

class LaravelJitsuServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-jitsu')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-jitsu_table')
            ->hasCommand(LaravelJitsuCommand::class);
    }
}
