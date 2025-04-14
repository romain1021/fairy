<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;
use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(PostRepository $postRepository, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Configure l'EntityManager global pour les objets Post
        Post::setGlobalEntityManager($entityManager);

        // Vérifier si l'utilisateur est authentifié
        if (!$this->getUser() && !$session->has('user_id')) {
            // Rediriger l'utilisateur non authentifié vers la page de login
            return $this->redirectToRoute('app_login');
        }

        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        foreach ($posts as $post) {
            $user = $post->getUser();
            $post->username = $user ? $user->getUsername() : 'Utilisateur inconnu';
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