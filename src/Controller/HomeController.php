<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

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

        // Ajouter une propriété temporaire pour afficher le nom de l'utilisateur
        foreach ($posts as $post) {
            $userId = $post->getUser()?->getId();
            if ($userId) {
                $user = User::getUserById($this->getDoctrine()->getManager(), $userId);
                $post->username = $user ? $user->getUsername() : 'Utilisateur inconnu';
            } else {
                $post->username = 'Utilisateur inconnu';
            }
        }

        return $this->render('home/index.html.twig', [
            'title' => 'fairy',
            'posts' => $posts,
            'username' => $session->get('username'),
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