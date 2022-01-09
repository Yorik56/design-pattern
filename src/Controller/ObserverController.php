<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObserverController extends AbstractController
{
    #[Route('/observer', name: 'observer')]
    public function index(): Response
    {
        return $this->render('observer/index.html.twig', [
            'controller_name' => 'ObserverController',
        ]);
    }
}
