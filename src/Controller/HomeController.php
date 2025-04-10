<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // Vérifier si l'utilisateur est authentifié et a un ID
        if (!$this->getUser() || !$this->getUser()->getId()) {
            // Rediriger l'utilisateur non authentifié vers la page de login
            return $this->redirectToRoute('app_login');
        }

        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur ma homepage Symfony !'
        ]);
    }
}