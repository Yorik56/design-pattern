<?php

namespace App\Controller;

use App\Decorator\BoldMessage;
use App\Decorator\ItalicMessage;
use App\Decorator\SimpleMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DecoratorController extends AbstractController
{
    #[Route('/decorator', name: 'decorator')]
    public function index(): Response
    {
        $simpleMessage = new SimpleMessage('Hello World');
        $boldMessage   = new BoldMessage($simpleMessage);
        $italicMessage = new ItalicMessage($simpleMessage);
        $boldAndItalicMessage = new BoldMessage(new ItalicMessage($simpleMessage));

        return $this->render('decorator/index.html.twig', [
            'controller_name'      => 'FactoryController',
            'simpleMessage'        => $simpleMessage->sendMessage(),
            'boldMessage'          => $boldMessage->sendMessage(),
            'italicMessage'        => $italicMessage->sendMessage(),
            'boldAndItalicMessage' => $boldAndItalicMessage->sendMessage(),
        ]);
    }
}