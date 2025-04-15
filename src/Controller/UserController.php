<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class UserController extends AbstractController
{
    /**
     * @Route("/user/{id}/follow", name="user_follow", methods={"POST"})
     */
    public function followUser(int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        $currentUser = $this->getUser();
        if (!$currentUser) {
            $this->get('logger')->error('Utilisateur non authentifié.');
            return new JsonResponse(['error' => 'Unauthorized'], 401);
        }

        $connection = $entityManager->getConnection();

        // Vérifier si la relation existe déjà
        $exists = $connection->fetchOne(
            'SELECT 1 FROM followers WHERE follower_id = :followerId AND followed_id = :followedId',
            [
                'followerId' => $currentUser->getId(),
                'followedId' => $id,
            ]
        );

        if ($exists) {
            $this->get('logger')->info('Relation déjà existante.', [
                'followerId' => $currentUser->getId(),
                'followedId' => $id,
            ]);
            return new JsonResponse(['error' => 'Already following'], 400);
        }

        // Ajouter une nouvelle relation dans la base de données
        try {
            $query = 'INSERT INTO followers (follower_id, followed_id) VALUES (:followerId, :followedId)';
            $connection->executeStatement($query, [
                'followerId' => $currentUser->getId(),
                'followedId' => $id,
            ]);
            $this->get('logger')->info('Relation ajoutée avec succès.', [
                'followerId' => $currentUser->getId(),
                'followedId' => $id,
            ]);
        } catch (\Exception $e) {
            $this->get('logger')->error('Erreur lors de l\'ajout de la relation.', [
                'error' => $e->getMessage(),
            ]);
            return new JsonResponse(['error' => 'Database error'], 500);
        }

        return new JsonResponse(['success' => true]);
    }
}