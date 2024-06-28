<?php

namespace MichaelNabil230\WhatsApp\Types;

use MichaelNabil230\WhatsApp\Abstracts\Type;

class Image extends Type
{
    public function __construct(protected string $link, protected ?string $caption = null) {}

    public static function make(string $link, ?string $caption = null): self
    {
        return new self(link: $link, caption: $caption);
    }

    public function toArray(): array
    {
        return [
            'link' => $this->link,
            'caption' => $this->caption,
        ];
    }

    public function type(): string
    {
        return 'image';
    }
}
