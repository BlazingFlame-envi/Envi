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
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire1');
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
       return $this->redirectToRoute('app_partenaire1');
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

    #[Route('/editpart/{id}', name: 'app_part_fedit')]
    public function fedit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , EntrepriseRepository $authorRepository)
    {
       $author = $authorRepository->find($id);
       $form=$this->createForm(FormEntrepriseType::class,$author);
       $form->handleRequest($request);
       if($form->isSubmitted())
       {
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
       return $this->redirectToRoute('app_partenaire1');
       }
       return $this->render('partenaire/ajouterEntreprise.html.twig',['f'=> $form->createView(),]);
       dump($author);
       die();
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
       $entityManagerInterface->persist($author);
       $entityManagerInterface->flush();
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
       if($form->isSubmitted())
       {
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

