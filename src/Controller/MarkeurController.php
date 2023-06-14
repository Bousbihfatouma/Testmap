<?php

namespace App\Controller;

use App\Entity\Markeur;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;

class MarkeurController extends AbstractController
{
    #[Route('/markeur', name: 'app_markeur')]
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Markeur::class);
        $Markeur = $repository->findAll();
        echo $Markeur;
        return $this->render('markeur/index.html.twig', [
            'controller_name' => 'MarkeurController',
        ]);
    }
}
