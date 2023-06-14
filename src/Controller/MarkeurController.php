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
    public function index(EntityManagerInterface $entityManager): Response
    {
        $repository = $entityManager->getRepository(Markeur::class);
        $markeurs = $repository->findAll();
        dump($markeurs);
        

        return $this->render('markeur/index.html.twig', [
            'controller_name' => 'MarkeurController',
            'markeurs' => $markeurs,
        ]);
    }
}
