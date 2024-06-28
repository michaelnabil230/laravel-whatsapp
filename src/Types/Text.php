<?php

namespace MichaelNabil230\WhatsApp\Types;

use MichaelNabil230\WhatsApp\Abstracts\Type;

class Text extends Type
{
    public function __construct(protected string $body) {}

    public static function make(string $body): self
    {
        return new self(body: $body);
    }

    public function toArray(): array
    {
        return [
            'body' => $this->body,
        ];
    }

    public function type(): string
    {
        return 'text';
    }
}
