<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreferenciasController extends AbstractController
{
    #[Route('/preferencias', name: 'preferencias')]
    public function index(): Response
    {
        return $this->render('preferencias/index.html.twig', [
            'controller_name' => 'PreferenciasController',
        ]);
    }
}
