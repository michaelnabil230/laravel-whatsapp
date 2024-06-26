<?php

namespace MichaelNabil230\WhatsApp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MichaelNabil230\WhatsApp\WhatsApp
 */
class WhatsApp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MichaelNabil230\WhatsApp\WhatsApp::class;
    }
}
