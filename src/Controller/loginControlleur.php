<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class loginControlleur extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        if ($session->get('username')) {
            // Redirige l'utilisateur connecté vers la page d'accueil
            return $this->redirectToRoute('home');
        }

        $error = null;

        if ($request->isMethod('POST')) {
            $username = $request->request->get('username');
            $password = $request->request->get('password');

            $user = $entityManager->getRepository(User::class)->findOneBy(['username' => $username]);

            if ($user && password_verify($password, $user->getPassword())) {
                $session->set('username', $user->getUsername());
                $session->set('user_id', $user->getId());
                return $this->redirectToRoute('home'); // Redirection corrigée
            } else {
                $error = 'Identifiants incorrects.';
            }
        }

        return $this->render('auth/login.html.twig', [
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('app_login');
    }

    #[Route('/user/home', name: 'app_user_home')]
    public function userHome(SessionInterface $session): Response
    {
        if (!$session->get('username')) {
            return $this->redirectToRoute('app_login');
        }

        return $this->redirectToRoute('home'); // Redirige vers /home
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
            ->add('username')
            ->add('email')
            ->add('password', \Symfony\Component\Form\Extension\Core\Type\PasswordType::class)
            ->add('bio')
            ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class, [
                'label' => 'S\'inscrire'
            ])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hacher le mot de passe avant de le sauvegarder
            $hashedPassword = password_hash($user->getPassword(), PASSWORD_BCRYPT);
            $user->setPassword($hashedPassword);

            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_login');
        }

        return $this->render('auth/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
