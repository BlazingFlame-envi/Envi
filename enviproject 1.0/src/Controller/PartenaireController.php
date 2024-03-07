<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormEntrepriseType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EntrepriseRepository;
use App\Entity\Entreprise;


class PartenaireController extends AbstractController
{
    #[Route('/partenaire', name: 'app_partenaire')]
    public function index(): Response
    {
        return $this->render('basefront.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    #[Route('/partenaire/fnew', name: 'app_partenaire_fnew')]
    public function fnew(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Entreprise();
       
       $form=$this->createForm(FormEntrepriseType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
        $imageFile = $form->get('imageFile')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );
            $author->setImage($newFilename);
        }
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       $mail = new \PHPMailer\PHPMailer\PHPMailer(true); // Make sure to have the correct namespace


            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.office365.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->Username = 'BreatheOutEnergy@outlook.com'; // Your Outlook email address
                $mail->Password = 'Breathe123@'; // Your Outlook password
                // Sender and recipient settings
                $mail->setFrom('BreatheOutEnergy@outlook.com', 'Envi');
                $nomUser = $author->getNomE(); // Use the $user object  :
                $emailUser = $author->getMailE(); // Use the $user object
                $mail->addAddress($emailUser);
                $mail->isHTML(true);
                $mail->Subject = 'WELCOME PARTENAIRE !';
                $mail->Body = "Dear $nomUser , <br> Welcome to Envi 

                We are thrilled to welcome you to the family of partners at ENVI! We are excited to begin this fruitful collaboration and work together to achieve our common goals.

                At ENVI, we are committed to providing quality solutions and exceptional customer service to our partners. We firmly believe that this partnership will be beneficial for both parties, and we are dedicated to supporting you throughout this journey.
                
                To get started, we encourage you to explore our platform and discover the many benefits we offer to our partners. Feel free to reach out to us at any time if you have any questions, concerns, or need any assistance. Our team is here to help you.
                
                We look forward to building a strong and mutually beneficial relationship with you. Thank you for your trust in ENVI!
                
                Best regards,
                ";
                $mail->AltBody = "hi";
                $mail->send();
                $this->addFlash('success', 'Verification email sent. Please check your inbox.');
            } catch (\PHPMailer\PHPMailer\Exception $e) {
                $this->addFlash('error', 'Mailer Error: ' . $e->getMessage());
                // Log the error message
                // error_log('Mailer Error: ' . $e->getMessage());
            }
       return $this->redirectToRoute('app_partenaire_list');
       }
       return $this->render('partenaire/ajouterEntreprise.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }


    
  


    #[Route('/partenaire/delete/{id}', name: 'app_partenaire_delete')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , EntrepriseRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire_list');
       dd($author);
       
    }

    #[Route('/afficherpart', name: 'app_partenaire1')]
    public function index3(EntrepriseRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('partenaire/index.html.twig', [
            'controller_name' => 'AuthorController',
            'partenaires' => $authorss,
            
        ]);
    }


    #[Route('/listpart', name: 'app_partenaire_list')]
    public function index7(EntrepriseRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('partenaire/listpart.html.twig', [
            'controller_name' => 'AuthorController',
            'partenaires' => $authorss,
            
        ]);
    }

    #[Route('/editpart/{id}', name: 'app_part_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EntrepriseRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(FormEntrepriseType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid())
       {
        $imageFile = $form->get('imageFile')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );
            $author->setImage($newFilename);
        }
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire_list');
       }
       return $this->render('partenaire/ajouterEntreprise.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }




    #[Route('/detailpart/{id}', name: 'app_part_detail')]
    public function fedit3($id, EntityManagerInterface $entityManager, EntrepriseRepository $entrepriseRepository)
    {
        $entreprise = $entrepriseRepository->find($id);
        
        // Vérifiez si l'entreprise existe
        if (!$entreprise) {
            throw $this->createNotFoundException('Entreprise non trouvée');
        }
        
        return $this->render('partenaire/details.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }
    



    #[Route('/backend', name: 'app_back')]
    public function indexback(): Response
    {
        return $this->render('homeback.html.twig', [
            'controller_name' => 'PartenaireController',
        ]);
    }

    #[Route('/afficherpartback', name: 'app_partenaire_back1')]
    public function indexx(EntrepriseRepository $authorRepository): Response
    {
        $authorss=$authorRepository->findAll();
        return $this->render('back/partenaireback.html.twig', [
            'controller_name' => 'AuthorController',
            'partenaires' => $authorss,
            
        ]);
    }

    #[Route('/partenaireback/fnew', name: 'app_partenaireback_fnew')]
    public function fnew2(Request $request , EntityManagerInterface $entityManagerInterface)
    {
       $author = new Entreprise();
       
       $form=$this->createForm(FormEntrepriseType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid()){
        $imageFile = $form->get('imageFile')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );
            $author->setImage($newFilename);
        }
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       $mail = new \PHPMailer\PHPMailer\PHPMailer(true); // Make sure to have the correct namespace


            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.office365.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;
                $mail->Username = 'BreatheOutEnergy@outlook.com'; // Your Outlook email address
                $mail->Password = 'Breathe123@'; // Your Outlook password
                // Sender and recipient settings
                $mail->setFrom('BreatheOutEnergy@outlook.com', 'Envi');
                $nomUser = $author->getNomE(); // Use the $user object  :
                $emailUser = $author->getMailE(); // Use the $user object
                $mail->addAddress($emailUser);
                $mail->isHTML(true);
                $mail->Subject = 'WELCOME PARTENAIRE !';
                $mail->Body = "Dear $nomUser , <br> Welcome to Envi 

                We are thrilled to welcome you to the family of partners at ENVI! We are excited to begin this fruitful collaboration and work together to achieve our common goals.

                At ENVI, we are committed to providing quality solutions and exceptional customer service to our partners. We firmly believe that this partnership will be beneficial for both parties, and we are dedicated to supporting you throughout this journey.
                
                To get started, we encourage you to explore our platform and discover the many benefits we offer to our partners. Feel free to reach out to us at any time if you have any questions, concerns, or need any assistance. Our team is here to help you.
                
                We look forward to building a strong and mutually beneficial relationship with you. Thank you for your trust in ENVI!
                
                Best regards,
                ";
                $mail->AltBody = "hi";
                $mail->send();
                $this->addFlash('success', 'Verification email sent. Please check your inbox.');
            } catch (\PHPMailer\PHPMailer\Exception $e) {
                $this->addFlash('error', 'Mailer Error: ' . $e->getMessage());
                // Log the error message
                // error_log('Mailer Error: ' . $e->getMessage());
            }
       return $this->redirectToRoute('app_partenaireback_fnew');
       }
       return $this->render('back/ajouterEntrepriseBack.html.twig',['f'=> $form->createView(),]);
      // dump($author);
      // die();
    }

    #[Route('/editpartback/{id}', name: 'app_partback_fedit')]
    public function fedit2(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EntrepriseRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(FormEntrepriseType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted()&& $form->isValid())
       {
        $imageFile = $form->get('imageFile')->getData();
        if ($imageFile) {
            $newFilename = uniqid().'.'.$imageFile->guessExtension();
            $imageFile->move(
                $this->getParameter('images_directory'),
                $newFilename
            );
            $author->setImage($newFilename);
        }
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire_back1');
       }
       return $this->render('back/ajouterEntrepriseBack.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
    }

    #[Route('/back/deletepart/{id}', name: 'app_partenaireback_delete')]
    public function delete2($id ,EntityManagerInterface $entityManagerInterface , EntrepriseRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $entityManagerInterface->remove($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire_back1');
       dd($author);
       
    }

}

