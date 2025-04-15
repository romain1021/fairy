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
use Symfony\Component\HttpFoundation\JsonResponse;

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

    #[Route('/post/{id}/repost', name: 'post_repost', methods: ['POST'])]
    public function repost(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ): JsonResponse {
        try {
            // Récupérer le post original
            $originalPost = $entityManager->getRepository(Post::class)->find($id);
            if (!$originalPost) {
                return $this->json(['error' => 'Post original introuvable.'], 404);
            }

            // Récupérer l'ID utilisateur depuis la session
            $userId = $request->getSession()->get('user_id');
            if (!$userId) {
                return $this->json(['error' => 'Utilisateur non authentifié.'], 403);
            }

            // Créer le repost
            $content = $request->get('comment', '');
            $repost = new Post();
            $repost->setContent($content);
            $repost->setUserId($userId);
            $repost->setCreatedAt(new \DateTime());
            $repost->setParentPost($originalPost);

            $entityManager->persist($repost);
            $entityManager->flush();

            // Récupérer les informations du repost pour la réponse
            $postData = [
                'id' => $repost->getId(),
                'content' => $repost->getContent(),
                'userId' => $repost->getUserId(),
                'createdAt' => $repost->getCreatedAt()->format('d/m/Y H:i'),
                'username' => $repost->getUserName(),
            ];

            return $this->json([
                'message' => 'Repost créé avec succès.',
                'repost' => $postData,
            ]);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Une erreur est survenue lors de la création du repost.'], 500);
        }
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('app_login');
    }
}