<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormOffreType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OffreRepository;
use App\Entity\Offre;


class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index3(OffreRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'AuthorController',
            'offres' => $authorss,
            
        ]);
    }

    #[Route('/offre/fnew', name: 'app_offre_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Offre();
       
       $form=$this->createForm(FormOffreType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offre');
       }
       return $this->render('offre/ajouteroffre.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/offre/delete/{id}', name: 'app_offre_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , OffreRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offre');
       dd($author);
       
    }


    #[Route('/editoffre/{id}', name: 'app_offre_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , OffreRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(FormOffreType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offre');
       }
       return $this->render('offre/ajouteroffre.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }


    #[Route('/offreback', name: 'app_offreback')]
    public function index7(OffreRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('back/afficheroffreback.html.twig', [
            'controller_name' => 'AuthorController',
            'offres' => $authorss,
            
        ]);
    }

    #[Route('/offreback/fnew', name: 'app_offreback_fnew')]
    public function fnew2(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Offre();
       
       $form=$this->createForm(FormOffreType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offreback_fnew');
       }
       return $this->render('back/ajouterOffreBack.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/editoffreback/{id}', name: 'app_offreback_fedit')]
    public function fedit2(Request $request,$id ,EntityManagerInterface $entityManagerInterface , OffreRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(FormOffreType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offreback');
       }
       return $this->render('back/ajouterOffreBack.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }

    #[Route('/back/deleteoffre/{id}', name: 'app_offreback_delete')]
    public function delete2($id ,EntityManagerInterface $entityManagerInterface , OffreRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_offreback');
       dd($author);
       
    }
}
