<?php

namespace MichaelNabil230\WhatsApp\Components;

use Illuminate\Support\Arr;
use MichaelNabil230\WhatsApp\Interfaces\Message;

/**
 * @property array<Message> $parameters
 */
class Body implements Message
{
    /**
     * @param  array<Message>  $parameters
     */
    public static function make(array $parameters): self
    {
        return new self($parameters);
    }

    public function __construct(public array $parameters)
    {
        //
    }

    public function toArray(): array
    {
        return [
            'type' => 'body',
            'parameters' => Arr::map($this->parameters, fn (Message $param) => $param->toArray()),
        ];
    }

    public function jsonSerialize(): mixed
    {
        return $this->toArray();
    }
}
