<?php

namespace MichaelNabil230\WhatsApp;

use MichaelNabil230\WhatsApp\Abstracts\Type;

class Message
{
    public function __construct(
        protected string $to,
        protected string $messagingProduct,
        protected string $recipientType,
        protected Type $type,
    ) {}

    public static function make(
        string $to,
        string $messagingProduct,
        string $recipientType,
        Type $type,
    ): self {
        return new self(
            to: $to,
            messagingProduct: $messagingProduct,
            recipientType: $recipientType,
            type: $type,
        );
    }

    public function toArray(): array
    {
        return [
            'to' => $this->to,
            'messaging_product' => $this->messagingProduct,
            'recipient_type' => $this->recipientType,
            'type' => $this->type->type(),
            $this->type->type() => $this->type->toArray(),
        ];
    }
}
