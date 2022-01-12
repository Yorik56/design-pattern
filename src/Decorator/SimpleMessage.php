<?php

namespace App\Decorator;

class SimpleMessage implements MessageInterface
{
    protected string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function sendMessage(): string
    {
        return $this->text;
    }
}