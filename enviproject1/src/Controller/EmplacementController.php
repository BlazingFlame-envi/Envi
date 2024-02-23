<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EmplacementRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Emplacement;
use App\Form\EmplacementType;
use Symfony\Component\HttpFoundation\Request;

class EmplacementController extends AbstractController
{

    #[Route('/emplacement', name: 'app_emplacement')]
    public function index(): Response
    {

        return $this->render('basefront.html.twig', [
            'controller_name' => 'EmplacementController',
        ]);
    }
    #[Route('/emplacement/fnew', name: 'app_emplacement_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Emplacement();
       
       $form=$this->createForm(EmplacementType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isvalid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement1');
       }
       return $this->render('emplacement/ajoutemp.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }
    #[Route('/emplacement/delete/{id}', name: 'app_emplacement_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , EmplacementRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement1');
       dd($author);
       
    }
    #[Route('/afficheremp', name: 'app_emplacement1')]
    public function index3(EmplacementRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('emplacement/index.html.twig',  [
            'controller_name' => 'AuthorController',
            'emplacements' => $authorss,
            
        
        ]    
        );
    }
    #[Route('/emplacement/fedit/{id}', name: 'app_emplacement_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EmplacementRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(EmplacementType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement1', ['id' => $author->getId()]);
       }
       return $this->render('emplacement/ajoutemp.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }
    #[Route('/backend', name: 'app_back')]
    public function indexback(): Response
    {
        return $this->render('homeback.html.twig', [
            'controller_name' => 'EmplacementController',
        ]);
    }

    #[Route('/afficherempback', name: 'app_emplacement_back1')]
    public function indexx(EmplacementRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('back/emplacementback.html.twig', [
            'controller_name' => 'AuthorController',
            'emplacements' => $authorss,
            
        ]);
    }

    #[Route('/emplacementback/fnew', name: 'app_emplacementback_fnew')]
    public function fnew2(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Emplacement();
       
       $form=$this->createForm(EmplacementType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement_back1');
       }
       return $this->render('back/ajoutemplacementBack.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/editempback/{id}', name: 'app_empback_fedit')]
    public function fedit2(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EmplacementRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(EmplacementType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement_back1');
       }
       return $this->render('back/ajoutemplacementBack.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }

    #[Route('/back/deleteemp/{id}', name: 'app_emplacementback_delete')]
    public function delete2($id ,EntityManagerInterface $entityManagerInterface , EmplacementRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_emplacement_back1');
       dd($author);
       
    }



}
