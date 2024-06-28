<?php

namespace MichaelNabil230\WhatsApp\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MichaelNabil230\WhatsApp\WhatsAppServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MichaelNabil230\\WhatsApp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            WhatsAppServiceProvider::class,
        ];
    }
}
