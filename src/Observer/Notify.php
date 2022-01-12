<?php

namespace App\Observer;

use SplObserver;
use SplSubject;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mime\Email;


class Notify implements SplObserver
{
    /**
     * @throws TransportExceptionInterface
     */
    public function update(SplSubject $subject)
    {
        //TODO Send email
        $email = (new Email())
            ->from('yorikmoreau@gmail.com')
            ->to('yorikmoreau@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer! :p')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');


        $transport = Transport::fromDsn($_ENV["MAILER_DSN"]);
        $mailer = new Mailer($transport);
        $mailer->send($email);

    }

}