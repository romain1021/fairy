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
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $userId = $user ? $user->getId() : $request->getSession()->get('user_id');

            if (!$userId) {
                $this->addFlash('error', 'Vous devez être connecté pour créer un post.');
                return $this->redirectToRoute('login');
            }

            $post->setUserId($userId);
            $post->setCreatedAt(new \DateTime());

            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('post/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/post/{id}/like', name: 'post_like', methods: ['POST'])]
    public function like(int $id, EntityManagerInterface $entityManager, Request $request): Response
    {
        $post = $entityManager->getRepository(Post::class)->find($id);
        if (!$post) {
            throw $this->createNotFoundException('Post non trouvé.');
        }

        $userId = $this->getUser() ? $this->getUser()->getId() : $request->getSession()->get('user_id');
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
