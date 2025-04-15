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
            return new JsonResponse(['error' => 'Unauthorized'], 401);
        }

        $connection = $entityManager->getConnection();
        $followerId = $currentUser->getId();

        // Vérifier si la relation existe déjà
        $query = 'SELECT * FROM followers WHERE follower_id = :followerId AND followed_id = :followedId';
        $stmt = $connection->prepare($query);
        $stmt->execute(['followerId' => $followerId, 'followedId' => $id]);
        $existingFollow = $stmt->fetch();

        if ($existingFollow) {
            // Supprimer la relation existante
            $deleteQuery = 'DELETE FROM followers WHERE follower_id = :followerId AND followed_id = :followedId';
            $connection->executeStatement($deleteQuery, ['followerId' => $followerId, 'followedId' => $id]);
            $isFollowing = false;
        } else {
            // Ajouter une nouvelle relation
            $insertQuery = 'INSERT INTO followers (follower_id, followed_id) VALUES (:followerId, :followedId)';
            $connection->executeStatement($insertQuery, ['followerId' => $followerId, 'followedId' => $id]);
            $isFollowing = true;
        }

        return new JsonResponse(['isFollowing' => $isFollowing]);
    }
}