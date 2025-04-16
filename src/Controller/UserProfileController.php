<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

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
        $currentUser = $this->getUser();
        if ($currentUser) {
            $isFollowing = (bool) $entityManager->getConnection()->fetchOne(
                'SELECT 1 FROM followers WHERE follower_id = :followerId AND followed_id = :followedId',
                [
                    'followerId' => $currentUser->getId(),
                    'followedId' => $id,
                ]
            );
        }

        $showFollowButton = $currentUser && $currentUser->getId() !== $id;

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'posts' => $posts,
            'isFollowing' => $isFollowing,
            'showFollowButton' => $showFollowButton, // Correction pour transmettre la variable
        ]);
    }

    #[Route('/user/register', name: 'user_register')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('username')
            ->add('email')
            ->add('password', PasswordType::class)
            ->add('profilePicture', FileType::class, [
                'label' => 'Photo de profil (fichier image)',
                'required' => false,
                'mapped' => false,
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('profilePicture')->getData();
            if ($file) {
                $fileName = uniqid() . '.' . $file->guessExtension();
                $file->move($this->getParameter('profile_pictures_directory'), $fileName);
                $user->setProfilePicture($fileName);
            }

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_profile', ['id' => $user->getId()]);
        }

        return $this->render('user/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
