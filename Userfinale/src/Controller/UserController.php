<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Twilio\Rest\Client;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Form\UserFormType;
use App\Form\ConfirmCodeType;
use App\Form\CangerPasswordType;
use App\Form\ResetPasswordType;
use App\Form\UsermodifyType;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
    #[Route('/user_display_front/{id}', name: 'user_show_details')]
    public function show_details_modify(UserRepository $repository, $id,EntityManagerInterface $entityManagerInterface , Request $request): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = $repository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $form = $this->createForm(UsermodifyType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('user_show_details',  );
        }
        return $this->render('/user/account.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
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
       return $this->redirectToRoute('app_user', ['id' => $author->getId()]);
       }
       return $this->renderForm('user/modifier.html.twig',['form'=>$form]);
       dump($author);
       die();
    }

    #[Route('/user/fnew', name: 'app_user_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface, SessionInterface $session)
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
       $session->set('isNewUserAdded', true);
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
    public function index_back(UserRepository $fournisseurRepository, FlashyNotifier $flashy, SessionInterface $session): Response
    {
               $authors=$fournisseurRepository->findAll(); 
               $isNewUserAdded = $session->get('isNewUserAdded', false);
        if ($isNewUserAdded) {
            $notificationLink = 'a new user is added';
            $flashy->success('A new user is added', $notificationLink);
            $session->set('isNewUserAdded', false);
        }

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



//forgot password user on login page
#[Route('/change/password', name: 'forgot')]
public function forgotPassword(Request $request, UserRepository $userRepository): Response
{
    $form = $this->createForm(ResetPasswordType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $num_tel = $form->get('num_tel')->getData();
        $user = $userRepository->findOneBy(['num_tel' => $num_tel]);
        if ($user) {
            $resetCode = sprintf('%04d', mt_rand(0, 9999));
            // Twilio configuration
            $sid = "ACc70851690f1f6d495e9c15e22dc846dd";
            $token = "9ce0572c7b73504697a631aa3ece81d2";
            $twilio = new Client($sid, $token);

            // Construct the URL with route parameters

            // Include the URL in the body of the SMS message
            $message = $twilio->messages
                ->create(
                    "+21696353942",
                    [
                        "from" => "+17815605297",
                        "body" => "Hi " . " " . $user->getNom() ." " .  $user->getPrenom() . " ". "This is your code to reset password : " . $resetCode
                    ]
                );

            return $this->redirectToRoute('password_code_confirm', ['idC' => $user->getId(), 'code' => $resetCode]);
        } else {
            $this->addFlash('error', 'Phone number does not exist');
            return $this->redirectToRoute('forgot');
        }
    }
    return $this->render('user/user_forgot_password.html.twig', [
        'form' => $form->createView(),
    ]);
}

#[Route('user/{idC}/{code}', name: 'password_code_confirm')]
public function password_code(UserRepository $repository , $idC , $code,Request $request): Response
{

    $newUser = $repository->find($idC);
    $form = $this->createForm(ConfirmCodeType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $user = $form->getData();
        $code1 = $user['code'];
        if($code1 == $code)
        {
            return $this->redirectToRoute('user_change_password', ['idC' => $newUser->getId()]);
        }
        else{
            $this->addFlash('error', 'Invalid code');
        }
    }
    return $this->render('user/code_confirm_check.html.twig', [
        'form' => $form->createView(),
    ]);
}
#[Route('user/{idC}', name: 'user_change_password')]
public function change_password(Request $request, UserRepository $repository, $idC, EntityManagerInterface $entityManager): Response
{
    $newUser = $repository->find($idC);
    $form = $this->createForm(CangerPasswordType::class,$newUser);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $user = $form->getData();
        $password = $user->getMotdepasse();
            $hashedPassword1 = $this->hasher->hashPassword(
                $newUser,
                $password
            );
            $newUser->setMotdepasse($hashedPassword1);
            $entityManager->persist($newUser);
            $entityManager->flush();
            return $this->redirectToRoute('app_login');
    }
    return $this->render('user/change_password.html.twig', [
        'form' => $form->createView(),
    ]);
}
}
