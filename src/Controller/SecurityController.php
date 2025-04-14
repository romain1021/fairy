<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(Request $request, SessionInterface $session): Response
    {
        // Logic for handling login

        if ($this->getUser()) {
            $user = $this->getUser();
            $session->set('username', $user->getUsername());
            $session->set('email', $user->getEmail());
        }

        // Render login page or redirect
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {
        // Symfony handles the logout logic automatically
    }
}