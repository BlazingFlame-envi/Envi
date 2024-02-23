<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cours;
use App\Repository\EmplacementRepository;
use App\Form\CoursType;
use Symfony\Component\HttpFoundation\Request;



class WorkshopsController extends AbstractController
{    
    #[Route('/workshops', name: 'app_workshops')]
    public function index(): Response
    {

        return $this->render('basefront.html.twig', [
            'controller_name' => 'WorkshopsController',
        ]);
    }
    #[Route('/workshops/fnew', name: 'app_workshops_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Cours();
       
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isvalid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops1');
       }
       return $this->render('workshops/ajoutcours.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }
   
    #[Route('/workshops/delete/{id}', name: 'app_workshops_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops1');
       dd($author);
       
    }
    #[Route('/afficherwork', name: 'app_workshops1')]
    public function index3(CoursRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('workshops/index.html.twig',  [
            'controller_name' => 'AuthorController',
            'workshops' => $authorss,
            
        
        ]    
        );
    }
    #[Route('/workshops/fedit/{id}', name: 'app_workshops_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops1', ['id' => $author->getId()]);
       }
       return $this->render('workshops/ajoutcours.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }
    #[Route('/backend', name: 'app_back')]
    public function indexback(): Response
    {
        return $this->render('homeback.html.twig', [
            'controller_name' => 'WorkshopsController',
        ]);
    }

    #[Route('/afficherworkback', name: 'app_workshops_back1')]
    public function indexx(CoursRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('back/workshopsback.html.twig', [
            'controller_name' => 'AuthorController',
            'workshops' => $authorss,
            
        ]);
    }

    #[Route('/workshopsback/fnew', name: 'app_workshopsback_fnew')]
    public function fnew2(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Cours();
       
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       }
       return $this->render('back/ajoutcoursBack.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/editworkback/{id}', name: 'app_workback_fedit')]
    public function fedit2(Request $request,$id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(CoursType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       }
       return $this->render('back/ajoutcoursBack.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }

    #[Route('/back/deletework/{id}', name: 'app_workshopsback_delete')]
    public function delete2($id ,EntityManagerInterface $entityManagerInterface , CoursRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_workshops_back1');
       dd($author);
       
    }

}



