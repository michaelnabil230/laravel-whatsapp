<?php

namespace MichaelNabil230\WhatsApp\Components\Parameters;

use MichaelNabil230\WhatsApp\Interfaces\Message;

class Text implements Message
{
    public function __construct(public string $text) {}

    public static function make(string $text): self
    {
        return new self($text);
    }

    public function toArray(): array
    {
        return [
            'type' => 'text',
            'text' => $this->text,
        ];
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
