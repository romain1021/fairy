<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    #[Route('/user/{id}/follow', name: 'user_follow', methods: ['POST'])]
    public function follow(int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        $currentUser = $this->getUser();

        if (!$currentUser) {
            return new JsonResponse(['error' => 'Utilisateur non connecté.'], Response::HTTP_UNAUTHORIZED);
        }

        if ($currentUser->getId() === $id) {
            return new JsonResponse(['error' => 'Vous ne pouvez pas vous suivre vous-même.'], Response::HTTP_BAD_REQUEST);
        }

        $connection = $entityManager->getConnection();
        $connection->insert('followers', [
            'follower_id' => $currentUser->getId(),
            'followed_id' => $id,
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),
        ]);

        return new JsonResponse(['success' => 'Utilisateur suivi avec succès.']);
    }

    #[Route('/user/edit', name: 'app_user_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user); // Les données actuelles de l'utilisateur sont préremplies
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form->get('plainPassword')->getData();
            if ($plainPassword) {
                $encodedPassword = $passwordEncoder->encodePassword($user, $plainPassword);
                $user->setPassword($encodedPassword);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Vos informations ont été mises à jour.');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('auth/edit_user.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}