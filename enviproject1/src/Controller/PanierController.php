<?php

namespace App\Controller;


use App\Entity\Ligne_panier;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\CategorieRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PanierController extends AbstractController
{


    #[Route('/ajouter_au_panier/{id_produit}/{id_user}', name: 'ajouter_panier')]
    public function index($id_produit, $id_user, EntityManagerInterface $entityManagerInterface, PanierRepository $panierRepository): Response
    {

        $user = $entityManagerInterface->getRepository(User::class)->findOneBy(['id' => $id_user]);
        $panier = $entityManagerInterface->getRepository(Panier::class)->findLastPanierByUser($user->getId());
        $produit = $entityManagerInterface->getRepository(Produit::class)->findOneBy(['id' => $id_produit]);

        if (count($panier) == 0) {
            $newPanier = new Panier();
            $newPanier->setEtat(0);
            $randomNumberBetween = mt_rand(1, 999999999999);
            $newPanier->setRef("#".$randomNumberBetween);
            $newPanier->setIdUser($user);
            $entityManagerInterface->persist($newPanier);
            $entityManagerInterface->flush();

            // ajout d'une nouvelle ligne_pagne liée au Panier crée
            $newLigne_panier = new Ligne_panier();
            $newLigne_panier->setQuantite(1);
            $newLigne_panier->setIdProduit($produit);
            $newLigne_panier->setIdPanier($newPanier);
            $entityManagerInterface->persist($newLigne_panier);
            $entityManagerInterface->flush();

        } else {

            // verifier si le produit existe deja dans le panier en question
            $ligne_panier_existant = $entityManagerInterface->getRepository(Ligne_panier::class)->findByPanierAndProduit(current($panier)->getId(), $produit->getId());
            if (count($ligne_panier_existant) == 0) {
                // ajout d'une nouvelle ligne_pagne liée au Panier crée
                $newLigne_panier = new Ligne_panier();
                $newLigne_panier->setQuantite(1);
                $newLigne_panier->setIdProduit($produit);
                $newLigne_panier->setIdPanier(current($panier));
                $entityManagerInterface->persist($newLigne_panier);
                $entityManagerInterface->flush();
            }else{
                // cuurent  =  1er element de la liste
                $newLignePanier  = current($ligne_panier_existant);
                $newLignePanier->setQuantite($newLignePanier->getQuantite() + 1);
                $entityManagerInterface->persist($newLignePanier);
                $entityManagerInterface->flush();
            }
        }



        return new Response('Produit ajouter au panier ' , 200);

    }

 // button ajouter sera disabled si la quantite = 0
    // lors de la validation du panier par le manager  on doit deduire la quanite du produit
}

