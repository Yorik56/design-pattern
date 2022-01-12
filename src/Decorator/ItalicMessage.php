<?php

namespace App\Decorator;

class ItalicMessage extends MessageDecorator
{
    public function sendMessage(): string
    {
        $message =  '<i>';
        $message .= $this->message->sendMessage();
        $message .= '</i>';

        return $message;
    }
}