<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class PostController extends AbstractController
{
    #[Route('/post', name: 'post')]
    public function new(Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $content = $request->request->get('content');
        $parentPostId = $request->request->get('parentPostId');

        $newPost = new Post();
        $newPost->setContent($content);
        $newPost->setUserId($this->getUser()->getId());
        $newPost->setCreatedAt(new \DateTime());

        if ($parentPostId) {
            $parentPost = $entityManager->getRepository(Post::class)->find($parentPostId);
            if ($parentPost) {
                $newPost->setParentPostId($parentPost->getId());
                $parentPost->addRepost($newPost);
            }
        }

        $entityManager->persist($newPost);
        $entityManager->flush();

        return $this->redirectToRoute('home');
    }

    #[Route('/post/{id}/like', name: 'post_like', methods: ['POST'])]
    public function like(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $post = $entityManager->getRepository(Post::class)->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post non trouvé.');
        }

        $userId = $request->getSession()->get('user_id');
        if (!$userId) {
            return $this->redirectToRoute('login');
        }

        $post->addLike($userId);
        $entityManager->flush();

        return $this->json(['likes' => $post->getLikesCount()]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(Request $request): Response
    {
        $session = $request->getSession();
        // Supprimer les données utilisateur de la session
        $session->clear();

        return $this->redirectToRoute('app_login');
    }

    #[Route('/post/{id}/repost', name: 'post_repost', methods: ['POST'])]
    public function repost(
        int $id,
        Request $request,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ): RedirectResponse {
        try {
            $originalPost = $entityManager->getRepository(Post::class)->find($id);

            if (!$originalPost) {
                $logger->error("Post original introuvable pour l'ID: {$id}");
                return $this->redirectToRoute('home');
            }

            $userId = $request->getSession()->get('user_id');
            if (!$userId) {
                $logger->error("Utilisateur non authentifié pour le repost du post ID: {$id}");
                return $this->redirectToRoute('login');
            }

            $content = $request->get('comment', '');

            $repost = new Post();
            $repost->setContent($content);
            $repost->setUserId($userId);
            $repost->setCreatedAt(new \DateTime());
            $repost->setParentPost($originalPost);

            $entityManager->persist($repost);
            $entityManager->flush();

            $logger->info("Repost créé avec succès pour le post ID: {$id}");

            return $this->redirectToRoute('home');
        } catch (\Exception $e) {
            $logger->critical("Erreur lors de la création du repost: " . $e->getMessage(), [
                'exception' => $e,
            ]);
            return $this->redirectToRoute('home');
        }
    }
}
