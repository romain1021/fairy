<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PostRepository $postRepository, SessionInterface $session): Response
    {
        // Vérifier si l'utilisateur est authentifié
        if (!$this->getUser() && !$session->has('user_id')) {
            // Rediriger l'utilisateur non authentifié vers la page de login
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les posts triés par date de création décroissante
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render('home/index.html.twig', [
            'title' => 'Bienvenue sur ma homepage Symfony !',
            'posts' => $posts,
            'logout_route' => 'app_logout',
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

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('app_login');
    }
}