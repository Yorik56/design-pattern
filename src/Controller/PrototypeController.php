<?php

namespace App\Controller;

use App\Prototype\FemalePrototype;
use App\Prototype\MalePrototype;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrototypeController extends AbstractController
{
    #[Route('/prototype', name: 'prototype')]
    public function index(): Response
    {
        $males = [
            ['firstName' => 'Robert', 'lastName' => 'Polson'],
            ['firstName' => 'Tyler', 'lastName'  => 'Durden'],
        ];
        $females = [
            ['firstName' => 'Marla', 'firstname' => 'Singer'],
            ['firstName' => 'Sophie', 'firstname' => 'Von Täschen']
        ];

        $male1 = new MalePrototype('Edouard', 'Abramovich');
        $female1 = new FemalePrototype('Molly', 'Grahams');

        $clones = [];
        $clones[] = $male1;
        foreach ($males as $male){
            $clone =  clone $male1;
            $clone->setFirstname($male['firstName']);
            $clone->setLastname($male['firstName']);

            $clones[] = $clone;
        }
        $clones[] = $female1;
        foreach ($females as $female){
            $clone =  clone $female1;
            $clone->setFirstname($female['firstName']);
            $clone->setLastname($female['firstName']);

            $clones[] = $clone;
        }

        return $this->render('prototype/index.html.twig', [
            'controller_name' => 'PrototypeController',
            'clones' => $clones
        ]);
    }
}