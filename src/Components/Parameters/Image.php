<?php

namespace MichaelNabil230\WhatsApp\Components\Parameters;

use MichaelNabil230\WhatsApp\Interfaces\Message;

class Image implements Message
{
    public function __construct(public string $link) {}

    public static function make(string $link): self
    {
        return new self($link);
    }

    public function toArray(): array
    {
        return [
            'type' => 'image',
            'image' => ['link' => $this->link],
        ];
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
