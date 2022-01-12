<?php

namespace App\Decorator;

class BoldMessage extends MessageDecorator
{
    public function sendMessage(): string
    {
        $message =  '<strong>';
        $message .= $this->message->sendMessage();
        $message .= '</strong>';

        return $message;
    }
}