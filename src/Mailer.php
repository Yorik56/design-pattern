<?php

namespace App;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\RawMessage;

class Mailer implements MailerInterface
{

    public function send(RawMessage $message, Envelope $envelope = null): void
    {
        // TODO: Implement send() method.
    }
}