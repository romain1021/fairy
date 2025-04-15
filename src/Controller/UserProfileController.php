<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserProfileController extends AbstractController
{
    #[Route('/user/profile/{id}', name: 'user_profile')]
    public function index(int $id, PostRepository $postRepository, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $posts = $postRepository->findBy(['userId' => $id], ['createdAt' => 'DESC']);

        $isFollowing = false;
        if ($this->getUser()) {
            $connection = $entityManager->getConnection();
            $query = 'SELECT * FROM followers WHERE follower_id = :followerId AND followed_id = :followedId';
            $stmt = $connection->prepare($query);
            $stmt->execute(['followerId' => $this->getUser()->getId(), 'followedId' => $id]);
            $isFollowing = (bool) $stmt->fetch();
        }

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'posts' => $posts,
            'isFollowing' => $isFollowing,
        ]);
    }
}
