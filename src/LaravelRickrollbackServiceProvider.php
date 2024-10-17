<?php

namespace Geisi\LaravelRickrollback;

use Geisi\LaravelRickrollback\Commands\LaravelRickrollbackCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelRickrollbackServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-rickrollback')
            ->hasCommand(LaravelRickrollbackCommand::class);
    }
}
