<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\FormEntrepriseType;
use App\Form\FormProduit;
use App\Repository\EntrepriseRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProduitController extends AbstractController
{



    #[Route('/listProduit', name: 'list_produit')]
    public function index(ProduitRepository $produitRepository): Response
    {
        $all_produit=$produitRepository->findAll();

        return $this->render('back/Shop/produit_list.html.twig', [
            'controller_name' => 'ProduitController',
            'list_produit' => $all_produit,

        ]);
    }


    #[Route('/produit/ajout', name: 'ajouter_produit')]
    public function ajouterProduit(Request $request , EntityManagerInterface $entityManagerInterface)
    {
        $produit = new Produit();

        $form=$this->createForm(FormProduit::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                $produit->setImage($newFilename);
            }
            $entityManagerInterface->persist($produit);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('list_produit');
        }
        return $this->render('back/Shop/ajouter_produit.html.twig',['form'=> $form->createView(),]);
        // dump($author);
        // die();
    }
    #[Route('/produit/delete/{id}', name: 'delete_produit')]
    public function delete($id ,EntityManagerInterface $entityManagerInterface , ProduitRepository $produitRepository)
    {
        $produit = $produitRepository->find($id);
        $entityManagerInterface->remove($produit);
        $entityManagerInterface->flush();
        return $this->redirectToRoute('list_produit');

    }
    #[Route('/produit/edit/{id}', name: 'edit_produit')]
    public function edit(Request $request,$id ,EntityManagerInterface $entityManagerInterface , ProduitRepository $produitRepository)
    {
        $produit = $produitRepository->find($id);
        $form=$this->createForm(FormProduit::class,$produit);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        { $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );
                $produit->setImage($newFilename);
            }
            $entityManagerInterface->persist($produit);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('list_produit');
        }
        return $this->render('back/Shop/ajouter_produit.html.twig',['form'=> $form->createView(),]);

    }

 //  Front Office

    #[Route('/shop', name: 'shop')]
    public function indexFront(ProduitRepository $produitRepository): Response
    {
        $all_produit=$produitRepository->findAll();

        return $this->render('front/Shop/shop.html.twig', [
            'controller_name' => 'ProduitController',
            'list_produit' => $all_produit,
        ]);
    }

}

