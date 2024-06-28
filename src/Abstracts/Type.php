<?php

namespace MichaelNabil230\WhatsApp\Abstracts;

use MichaelNabil230\WhatsApp\Interfaces\Type as TypeInterface;

abstract class Type implements TypeInterface
{
    abstract public function type(): string;
}
