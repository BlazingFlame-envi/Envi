<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserFormType;
use App\Form\UsermodifyType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    #[Route('/user', name: 'app_user')]
    public function index_front(UserRepository $fournisseurRepository): Response
    {
               $authors=$fournisseurRepository->findAll(); 

         return $this->render('user/account.html.twig', array(
            'authors' => $authors,
            
        ));
    }
    #[Route('/user/fedit/{id}', name: 'app_user_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , UserRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(UsermodifyType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_user_fedit', ['id' => $author->getId()]);
       }
       return $this->renderForm('user/account.html.twig',['form'=>$form]);
       dump($author);
       die();
    }

    #[Route('/user/fnew', name: 'app_user_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new User();
       
       $form=$this->createForm(UserFormType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid() ){
        $author=$form->getData();
        $password=$author->getPassword();
        $hashedpassword= $this->hasher->hashPassword(
            $author,
            $password
        );
        $author->setMotdepasse($hashedpassword);
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_login');
       }
       return $this->render('user/signin.html.twig',['form'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    
    #[Route('/afficheruser', name: 'app_user1')]
    public function index3(UserRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('user/index.html.twig', [
            'controller_name' => 'AuthorController',
            'u' => $authorss,
            
        ]);
    }
    #[Route('/user/delete/{id}', name: 'app_user_back_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , UserRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_user_back');
       dd($author);
       
    }
    #[Route('/user/back', name: 'app_user_back')]
    public function index_back(UserRepository $fournisseurRepository): Response
    {
               $authors=$fournisseurRepository->findAll(); 

         return $this->render('user/afficher_back.html.twig', array(
            'authors' => $authors,
            
        ));
    }
    #[Route('/user/fnew/back', name: 'app_user_fnew_back')]
    public function fnew_back(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new User();
       
       $form=$this->createForm(UserFormType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid() ){
        $author=$form->getData();
        $password=$author->getPassword();
        $hashedpassword= $this->hasher->hashPassword(
            $author,
            $password
        );
        $author->setMotdepasse($hashedpassword);
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_user_back');
       }
       return $this->render('user/ajouter_back.html.twig',['form'=> $form->createView(),]);
      // dump($author);
      // die();
    }
    #[Route('/{id}', name: 'user_active')]
    public function user_active($id, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        if(!$id) {
            throw $this->createNotFoundException('No ID found');
        }
        $user = $entityManager->getRepository(User::class)->find($id);
        if($user != null) {
            $user->setStatus("active");
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_user_back');
    }
    #[Route('/{id}/inactive', name: 'user_inactive')]
public function user_inactive($id, EntityManagerInterface $entityManager): Response
{
    $user = $entityManager->getRepository(User::class)->find($id);

    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $user->setStatus("inactive");
    $entityManager->flush();

    return $this->redirectToRoute('app_user_back');
}
}
