<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Form\FormEntrepriseType;
use App\Repository\EntrepriseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Entreprise;
use App\Repository\OffreRepository;
use App\Entity\Offre;
use App\Entity\Taches;
use App\Entity\Succes;
use App\Repository\SuccesRepository;
use App\Form\SuccesType;
use App\Form\FormOffreType;
use Symfony\Component\Security\Core\Security;
use App\Repository\TachesRepository;
use App\Form\TachesType;
use Symfony\Component\HttpFoundation\JsonResponse;

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
        }else
        {
            if($user->getStatus() == "inactive")
            {
                $this->addFlash('failed','User Account not already activated');
                return $this->redirectToRoute('app_login');
            }
        }
        $role = $user->getRole();
    
        switch($role) 
        {
            case 'benevole':
                return $this->redirectToRoute('app_partenaire');
            case 'agence':
                return $this->redirectToRoute('app_partenaire');
            case 'employé':
                return $this->redirectToRoute('app_partenaire');
                case 'admin':
                    return $this->render('homeback.html.twig');
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
