<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
}