<?php

namespace App\Controller;
use App\Entity\Succes;
use App\Entity\Offre;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\SuccesRepository;
use App\Form\SuccesType;


class SuccesController extends AbstractController
{

    

    #[Route('/succes', name: 'app_succes')]
    public function index1(SuccesRepository $succesRepository): Response
    {
        $succes=$succesRepository->findAll();
        return $this->render('basefront.html.twig');
    }
    
    #[Route('succes/edit/{id}', name: 'app_succes_edit')]
    public function edit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , SuccesRepository $authorRepository)
    {
       $succes = $authorRepository->find($id);
       $form=$this->createForm(SuccesType::class,$succes);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($succes);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'Le succes a été edité avec succès.');
       return $this->redirectToRoute('app_succes_index');
       }
       return $this->renderForm('succes/edit.html.twig',['form'=>$form]);
       dump($succes);
       die();
    }
    #[Route('/succes/index', name: 'app_succes_index')]
    public function index(SuccesRepository $succesRepository): Response
    {
               $succes=$succesRepository->findAll();
        return $this->render('succes/index.html.twig', array(
            'succes' => $succes,
            
        ));
    }
    #[Route('/succes/new', name: 'app_succes_new')]
    public function fnew(Request $request ,EntityManagerInterface $entityManagerInterface)
    {
        $succe= new Succes();
        $form=$this->createForm(SuccesType::class,$succe);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $entityManagerInterface->persist($succe);
            $entityManagerInterface->flush();
            $this->addFlash('success', 'Le nouveau succes a été ajouté avec succès.');
            return $this->redirectToRoute('app_succes_index');
        }
        return $this->renderForm('succes/formsucces.html.twig',['form'=>$form,'succes' => $succe,'info'=>'Add succes']);
    
    }
    
    #[Route('/succes/delete/{id}', name: 'app_succes_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , SuccesRepository $succesRepository): Response
    {
        $succe = $succesRepository->find($id);
       $entityManagerInterface->remove($succe);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'Le succes a été supprimé avec succès.');
       return $this->redirectToRoute('app_succes_index');
       dd($succe);
    }
   

   #[Route('/succes/back', name: 'app_succes_back')]
   public function index3(SuccesRepository $succesRepository): Response
   {
       $succes=$succesRepository->findAll();
       return $this->render('back/homeback.html.twig');
   }
   #[Route('/succes/affback', name: 'app_succes_index_back')]
   public function index2(SuccesRepository $succesRepository): Response
   {
              $succes=$succesRepository->findAll();
       return $this->render('back/backevents/indexsucces.html.twig', array(
           'succes' => $succes,
           
       ));
   }
   #[Route('succes/editback/{id}', name: 'app_succes_edit_back')]
    public function editB(Request $request,$id ,EntityManagerInterface $entityManagerInterface , SuccesRepository $authorRepository)
    {
       $succes = $authorRepository->find($id);
       $form=$this->createForm(SuccesType::class,$succes);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($succes);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'Le succes a été edité avec succès.');
       return $this->redirectToRoute('app_succes_index_back');
       }
       return $this->renderForm('back/backevents/editsucces.html.twig',['form'=>$form]);
       dump($succes);
       die();
    }
    #[Route('/succes/newback', name: 'app_succes_new_back')]
    public function fnewB(Request $request ,EntityManagerInterface $entityManagerInterface)
    {
        $succe= new Succes();
        $form=$this->createForm(SuccesType::class,$succe);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $entityManagerInterface->persist($succe);
            $entityManagerInterface->flush();
            $this->addFlash('success', 'Le nouveau succes a été ajouté avec succès.');
            return $this->redirectToRoute('app_succes_index_back');
        }
        return $this->renderForm('back/backevents/ajoutsucces.html.twig',['form'=>$form,'succes' => $succe,'info'=>'Add succes']);
    
    }
    #[Route('/succes/deleteback/{id}', name: 'app_succes_delete_back')]
    public function deleteB($id ,EntityManagerInterface $entityManagerInterface , SuccesRepository $succesRepository): Response
    {
        $succe = $succesRepository->find($id);
       $entityManagerInterface->remove($succe);
       $entityManagerInterface->flush();
       $this->addFlash('success', 'Le succes a été supprimé avec succès.');
       return $this->redirectToRoute('app_succes_index_back');
       dd($succe);
    }
    




   
}
