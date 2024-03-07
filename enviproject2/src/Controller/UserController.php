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
    public function index(UserRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('basefront.html.twig');
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

    #[Route('/user/delete/{id}', name: 'app_user_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , UserRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_user_fnew');
       dd($author);
       
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
}
