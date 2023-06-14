<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarkeurController extends AbstractController
{
    #[Route('/markeur', name: 'app_markeur')]
    public function index(): Response
    {
        return $this->render('markeur/index.html.twig', [
            'controller_name' => 'MarkeurController',
        ]);
    }
}
