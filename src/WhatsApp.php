<?php

namespace MichaelNabil230\WhatsApp;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class WhatsApp
{
    protected PendingRequest $http;

    public function __construct()
    {
        $this->http = Http::baseUrl('https://graph.facebook.com/v'.config('whatsapp.default_version').'/'.config('whatsapp.default_number_id').'/')
            ->acceptJson()
            ->withToken(config('whatsapp.token'));
    }

    public static function make(): self
    {
        return new self();
    }

    public function send(Message $message): Response
    {
        return $this->http->post('/messages', $message->toArray());
    }
}
