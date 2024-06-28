<?php

namespace MichaelNabil230\WhatsApp\Components;

use MichaelNabil230\WhatsApp\Interfaces\Message;

/**
 * @property array<Message> $parameters
 */
class Footer implements Message
{
    /**
     * @param  array<Message>  $parameters
     */
    public static function make(array $parameters): self
    {
        return new self($parameters);
    }

    public function __construct(
        public array $parameters,
    ) {
        //
    }

    public function toArray(): array
    {
        return [
            'type' => 'footer',
            'parameters' => array_map(fn ($param) => $param->toArray(), $this->parameters),
        ];
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
