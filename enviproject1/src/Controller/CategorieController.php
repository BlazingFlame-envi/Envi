<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Form\FormCategorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{


    #[Route('/listCategorie', name: 'list_Categorie')]
    public function index(CategorieRepository $CategorieRepository, Request $request): Response
    {
        $all_Categorie = $CategorieRepository->findAll();

        $erreur = $request->query->get('erreur', '');

        return $this->render('back/Shop/Categorie_list.html.twig', [
            'controller_name' => 'CategorieController',
            'list_Categorie' => $all_Categorie,
            'erreur' => $erreur
        ]);
    }

    #[Route('/Categorie/ajout', name: 'ajouter_Categorie')]
    public function ajouterCategorie(Request $request, EntityManagerInterface $entityManagerInterface)
    {
        $Categorie = new Categorie();

        $form = $this->createForm(FormCategorie::class, $Categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManagerInterface->persist($Categorie);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('list_Categorie');
        }
        return $this->render('back/Shop/ajouter_Categorie.html.twig', ['form' => $form->createView(),]);

    }

    #[Route('/Categorie/delete/{id}', name: 'delete_Categorie')]
    public function delete($id, EntityManagerInterface $entityManagerInterface, CategorieRepository $CategorieRepository)
    {
        $Categorie = $CategorieRepository->find($id);
        $produits = $entityManagerInterface->getRepository(Produit::class)->findByCategorie($id);
        if (count($produits) > 0) {
            return $this->redirectToRoute('list_Categorie', ['erreur' => 'Cette categorie contient des produits']);
        }
        $entityManagerInterface->remove($Categorie);
        $entityManagerInterface->flush();
        return $this->redirectToRoute('list_Categorie');

    }

    #[Route('/Categorie/edit/{id}', name: 'edit_Categorie')]
    public function edit(Request $request, $id, EntityManagerInterface $entityManagerInterface, CategorieRepository $CategorieRepository)
    {
        $Categorie = $CategorieRepository->find($id);
        $form = $this->createForm(FormCategorie::class, $Categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManagerInterface->persist($Categorie);
            $entityManagerInterface->flush();
            return $this->redirectToRoute('list_Categorie');
        }
        return $this->render('back/Shop/ajouter_Categorie.html.twig', ['form' => $form->createView(),]);

    }


}

