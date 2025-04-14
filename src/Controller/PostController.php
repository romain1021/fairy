<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    #[Route('/post', name: 'post')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $session = $request->getSession();

        $post = new Post($entityManager); // Passez l'EntityManager au constructeur
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setCreatedAt(new \DateTime());
            $post->setUserId($session->get('user_id')); // Associe l'utilisateur connecté au post
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('post/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(Request $request): Response
    {
        $session = $request->getSession();
        // Supprimer les données utilisateur de la session
        $session->clear();

        return $this->redirectToRoute('app_login');
    }
}
