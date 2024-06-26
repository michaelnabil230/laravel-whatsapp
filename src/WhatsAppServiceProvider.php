<?php

namespace MichaelNabil230\WhatsApp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WhatsAppServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-whatsapp')
            ->hasConfigFile();
    }
}
