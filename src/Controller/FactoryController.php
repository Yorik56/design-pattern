<?php

namespace App\Controller;

use App\Entity\Factory;
use Doctrine\Persistence\ManagerRegistry;
use App\DB_Factory\DBFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactoryController extends AbstractController
{
    #[Route('/factory', name: 'factory')]
    public function index(): Response
    {
        $db_mysql = DBFactory::create('mysql');
        $db_mysql_connexion = $db_mysql->connect([
            "HOSTNAME" => $this->getParameter('app.mysql_hostname'),
            "USERNAME" => $this->getParameter('app.mysql_username'),
            "PASSWORD" => $this->getParameter('app.mysql_password'),
            "DATABASE" => $this->getParameter('app.mysql_database')
        ]);
        $data_mysql = $db_mysql->query($db_mysql_connexion, "SELECT * FROM factory");

        $db_pgsql = DBFactory::create('postgres');
        $db_pgsql_connexion = $db_pgsql->connect([
            "HOSTNAME" => $this->getParameter('app.pgsql_hostname'),
            "USERNAME" => $this->getParameter('app.pgsql_username'),
            "PASSWORD" => $this->getParameter('app.pgsql_password'),
            "DATABASE" => $this->getParameter('app.pgsql_database')
        ]);
        $data_pgsql = $db_pgsql->query($db_pgsql_connexion, "SELECT * FROM factory");

        return $this->render('factory/index.html.twig', [
            'controller_name' => 'FactoryController',
            'db_mysql' => $data_mysql,
            'db_pgsql' => $data_pgsql,
        ]);
    }

//    #[Route('/create_factory', name: 'create_factory')]
//    public function createFactory(ManagerRegistry $doctrine): Response
//    {
//        $entityManager = $doctrine->getManager();
//        $factory = new Factory();
//        $factory->setName('PgSql');
//        // tell Doctrine you want to (eventually) save the Product (no queries yet)
//        $entityManager->persist($factory);
//        // actually executes the queries (i.e. the INSERT query)
//        $entityManager->flush();
//        return new Response('Saved new product with id '.$factory->getId());
//    }
}
