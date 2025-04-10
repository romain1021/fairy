<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PostRepository $postRepository): Response
    {
        // Vérifier si l'utilisateur est authentifié et a un ID
        if (!$this->getUser() || !$this->getUser()->getId()) {
            // Rediriger l'utilisateur non authentifié vers la page de login
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les posts triés par date de création décroissante
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur ma homepage Symfony !',
            'posts' => $posts,
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function indexPosts(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findBy([], ['id' => 'ASC']);

        return $this->render('home/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}