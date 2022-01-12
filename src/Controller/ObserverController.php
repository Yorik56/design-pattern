<?php

namespace App\Controller;

use App\Entity\Index;
use App\Entity\Notification;
use App\Entity\User;
use App\Observer\Indexing;
use App\Observer\Notify;
use App\Observer\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class ObserverController extends AbstractController
{


    #[Route('/observer', name: 'observer')]
    public function index(MailerInterface $mailer): Response
    {


        $notify = new Notify();
        $indexing = new Indexing();

        $userManager = new UserManager();
        $userManager->attach($notify);
        $userManager->attach($indexing);

        $user = (new User())
            ->setName("james");

        $userManager->create($user);


        return $this->render('observer/index.html.twig', [
            'controller_name' => 'ObserverController',
        ]);
    }

}
