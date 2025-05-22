<?php

namespace App\Controller;

use App\Entity\Vote;
use Doctrine\ORM\EntityManagerInterface;

class VoteController
{
    public static function findByIdNbVote(int $postId, EntityManagerInterface $entityManager): int
    {
        return $entityManager->getRepository(Vote::class)->count(['id_post' => $postId]);
    }

    public static function findByIdMoyenne(int $postId, EntityManagerInterface $entityManager): float
    {
        $votes = $entityManager->getRepository(Vote::class)->findBy(['id_post' => $postId]);
        if (count($votes) === 0) {
            return 0.0;
        }
        $total = 0;
        foreach ($votes as $vote) {
            $total += $vote->getNote();
        }
        return $total / count($votes);
    }
}