<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YourControllerNameController extends AbstractController
{
    #[Route('/your/controller/name', name: 'app_your_controller_name')]
    public function index(): Response
    {
        return $this->render('your_controller_name/index.html.twig', [
            'controller_name' => 'YourControllerNameController',
        ]);
    }
}
