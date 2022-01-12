<?php

namespace App\Decorator;

abstract class MessageDecorator implements MessageInterface
{
    protected MessageInterface $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }
}