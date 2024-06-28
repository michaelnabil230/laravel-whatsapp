<?php

namespace MichaelNabil230\WhatsApp\Types;

use MichaelNabil230\WhatsApp\Abstracts\Type;
use MichaelNabil230\WhatsApp\Components\Body;
use MichaelNabil230\WhatsApp\Components\Footer;
use MichaelNabil230\WhatsApp\Components\Header;
use MichaelNabil230\WhatsApp\Components\Parameters\Button;

/**
 * @property array<Button> $buttons
 */
class Template extends Type
{
    /**
     * @param  Button[]  $buttons
     */
    public static function make(
        string $name = '',
        string $language = '',
        ?Header $header = null,
        ?Body $body = null,
        ?Footer $footer = null,
        array $buttons = [],
    ): self {
        return new self($name, $language, $header, $body, $footer, $buttons);
    }

    public function __construct(
        public string $name,
        public string $language,
        public ?Header $header = null,
        public ?Body $body = null,
        public ?Footer $footer = null,
        public array $buttons = [],
    ) {
        //
    }

    public function type(): string
    {
        return 'template';
    }

    public function name(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function language(string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function header(Header|array $header): static
    {
        if (is_array($header)) {
            $this->header = Header::make($header);
        } else {
            $this->header = $header;
        }

        return $this;
    }

    public function body(Body|array $body): static
    {
        if (is_array($body)) {
            $this->body = Body::make($body);
        } else {
            $this->body = $body;
        }

        return $this;
    }

    public function footer(Footer|array $footer): static
    {
        if (is_array($footer)) {
            $this->footer = Footer::make($footer);
        } else {
            $this->footer = $footer;
        }

        return $this;
    }

    /**
     * @param  Button[]  $buttons
     */
    public function buttons(array $buttons): static
    {
        $this->buttons = $buttons;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'language' => ['code' => $this->language],
            'components' => collect([
                $this->header,
                $this->body,
                $this->footer,
                ...$this->buttons,
            ])
                ->whereNotNull()
                ->values()
                ->toArray(),
        ];
    }
}
