<?php

namespace Mpanius\LaravelJitsu;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        app()->singleton(LaravelJitsu::class, function () {
            return new LaravelJitsu();
        });
    }
}
