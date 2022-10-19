<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }


    #[Route('/{name}', name: 'app_name')]
    public function name($name): Response
    {
        $nom= strtoupper($name);

        return $this->render('test/name.html.twig',['nom' => $nom ]);
    }

    #[Route('/somme/{nb1}/{nb2}', name: 'app_somme')]
    public function somme ($nb1,$nb2): Response
    {
        $somme=$nb1+$nb2;

        return $this->render('test/somme.html.twig',['a'=>$nb1,'b'=>$nb2,'somme' => $somme ]);
    }



   


}
