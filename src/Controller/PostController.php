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
        $user = $this->getUser();
        $session = $request->getSession();

        if (!$user || !method_exists($user, 'getId')) {
            if (!$session->has('user_id')) {
                return $this->redirectToRoute('app_login');
            }
            $userId = $session->get('user_id');
        } else {
            $userId = $user->getId();
            if (!$session->has('user_id') || $session->get('user_id') !== $userId) {
                $session->set('user_id', $userId);
            }
        }

        $post = new Post();
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $post->setCreatedAt(new \DateTime());
            $post->setUser($this->getUser());
            $entityManager->persist($post);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('post/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
