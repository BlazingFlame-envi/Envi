<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    public function onLoginSuccess()
    {
         return $this->redirectToRoute('homeOn');
    }

    #[Route('/', name: 'homeOn')]
    public function homeOn(): Response
    {
        // session
        $user = $this->getUser();
        if (!$user)
        {
            // Redirect to login if no user is authenticated
            return $this->redirectToRoute('app_login');
        }
        $role = $user->getRole();
    
        switch($role) 
        {
            case 'benevole':
                return $this->render('user/homeONbenevole.html.twig');
            case 'agence':
                return $this->render('user/homeONagence.html.twig');
            case 'employé':
                return $this->render('user/homeONemploye.html.twig');
            default:
            
                break;
        }
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
