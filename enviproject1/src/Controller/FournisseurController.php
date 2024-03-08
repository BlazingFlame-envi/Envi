<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FournisseurRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\FormefournisseurType;
use App\Entity\Fournisseur;



class FournisseurController extends AbstractController
{

    #[Route('/ffournisseur', name: 'app_fournisseurf')]
    public function index1(FournisseurRepository $succesRepository): Response
    {
        $succes=$succesRepository->findAll();
        return $this->render('basefront.html.twig');
    }

    #[Route('/fournisseur', name: 'app_fournisseur')]
    public function index(FournisseurRepository $fournisseurRepository,EntityManagerInterface $entityManagerInterface): Response
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role != 'benevole') {
        $listEntreprise = $entityManagerInterface->getRepository(Fournisseur::class)->getEntrepriseByUser($user);
       
        return $this->render('fournisseur/index.html.twig', array(
            'authors' => $listEntreprise,
            
        ));
    }
    return $this->render('basefront.html.twig');
    }
#[Route('/fournisseur/fnew', name: 'app_fournisseur_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
        $user = $this->getUser();
        $user1 = $this->getUser()->getId();
        $role = $user->getRole();
        if ($role != 'benevole') {
        
       $authors = new Fournisseur();
       
       $form=$this->createForm(FormefournisseurType::class,$authors);
       $form->handleRequest($request);
       if($form->isSubmitted()&&$form->isValid()){
        $authors->setUser( $this->getUser()); 
       $entityManagerInterface->persist($authors);
       $entityManagerInterface->flush();
      
       return $this->redirectToRoute('app_fournisseur');
       }
       return $this->renderForm('fournisseur/formefournisseur.html.twig',['form'=>$form,'user'=>$user1]);
      // dump($author);
      // die();
    } else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_fournisseurf'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
}

#[Route('/fournisseur/fedit/{id}', name: 'app_fournisseur_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , FournisseurRepository $fournisseurRepository)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role != 'benevole') {
       $author = $fournisseurRepository->find($id);
       $form=$this->createForm(FormefournisseurType::class,$author);
       $form->handleRequest($request);
if($form->isSubmitted()&&$form->isValid())    
   {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_fournisseur');
       }
       return $this->renderForm('fournisseur/formefournisseur.html.twig',['form'=>$form]);
       dump($author);
       die();
    }else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_fournisseurf'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
    }
#[Route('/fournisseur/delete/{id} ', name: 'app_fournisseur_delete')]
public function delete($id ,EntityManagerInterface $entityManagerInterface , FournisseurRepository $fournisseurRepository)
    {
        $user = $this->getUser();
        $role = $user->getRole();
        if ($role  != 'benevole') {
       $author = $fournisseurRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_fournisseur');
       dd($author);
       
    }
    else {
        // Si le rôle de l'utilisateur n'est pas 'agence', rediriger ou afficher un message d'erreur
        $this->addFlash('error', 'You do not have permission to access this page.');
        return $this->redirectToRoute('app_fournisseurf'); // Redirection vers une page d'accueil ou une autre page appropriée
    }
    }
     
      #[Route('/back_fournisseur', name: 'app_fournisseur_back')]
    public function indexfournisseur(FournisseurRepository $fournisseurRepository): Response
    {
        $authors=$fournisseurRepository->findAll(); 
        return $this->render('back/afficherfournisseurback.html.twig', array(
            'authors' => $authors,
            
        ));
    }


#[Route('/fournisseurback/fnew_fournisseur', name: 'app_fournisseur_fnew_back')]
    public function fnewfournisseur(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $authors = new Fournisseur();
       
       $form=$this->createForm(FormefournisseurType::class,$authors);
       $form->handleRequest($request);
       if($form->isSubmitted()&&$form->isValid()){
       $entityManagerInterface->persist($authors);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_fournisseur_back');
       }
       return $this->renderForm('back/ajouter_back_fournisseur.html.twig',['form'=>$form]);
      // dump($author);
      // die();
    }

#[Route('/fournisseurback/fedit/{id}', name: 'app_fournisseur_fedit_back')]
    public function feditfournisseur(Request $request,$id ,EntityManagerInterface $entityManagerInterface , FournisseurRepository $fournisseurRepository)
    {
       $author = $fournisseurRepository->find($id);
       $form=$this->createForm(FormefournisseurType::class,$author);
       $form->handleRequest($request);
if($form->isSubmitted()&&$form->isValid())    
   {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_fournisseur_back');
       }
       return $this->renderForm('back/ajouter_back_fournisseur.html.twig',['form'=>$form]);
       dump($author);
       die();
    }




#[Route('/back/delete/{id} ', name: 'app_fournisseur_delete_back')]
public function deletefournisseur($id ,EntityManagerInterface $entityManagerInterface , FournisseurRepository $fournisseurRepository)
    {
       $author = $fournisseurRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_fournisseur_back');
       dd($author);
       
    }




     #[Route('/triiii', name: 'app_fournisseur_tri', methods: ['GET'])]
    public function afficherSOrdredNom(FournisseurRepository $fournisseurRepository): Response
    {
        $author = $fournisseurRepository->getFournisseurby();
        return $this->render('fournisseur/index.html.twig', [
            'authors' => $author,
        ]);
    }


    
     #[Route('/triiiiback', name: 'app_fournisseur_triback', methods: ['GET'])]
    public function afficherSOrdredage(FournisseurRepository $fournisseurRepository): Response
    {
        $author = $fournisseurRepository->getFournisseurbyage();
        return $this->render('back/afficherfournisseurback.html.twig', [
            'authors' => $author,
        ]);
    }


}
