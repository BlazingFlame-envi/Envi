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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use App\Controller\SmsService;
use App\Controller\EmailService;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
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
            $newPanier->setRef("#" . $randomNumberBetween);
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
            } else {
                // cuurent  =  1er element de la liste
                $newLignePanier = current($ligne_panier_existant);
                $newLignePanier->setQuantite($newLignePanier->getQuantite() + 1);
                $entityManagerInterface->persist($newLignePanier);
                $entityManagerInterface->flush();
            }
        }


        return new Response('Produit ajouter au panier ', 200);

    }

    #[Route('/affichage_panier/{id_user}', name: 'afficher_panier')]
    public function afficherPanier($id_user, EntityManagerInterface $entityManagerInterface, PanierRepository $panierRepository,SerializerInterface $serializer): JsonResponse
    {

        $user = $entityManagerInterface->getRepository(User::class)->findOneBy(['id' => $id_user]);
        $panier = $entityManagerInterface->getRepository(Panier::class)->findLastPanierByUser($user->getId());


        if (count($panier) == 0) {
            return new JsonResponse('Panier vide', 200);
        } else {
            $mon_panier = current($panier);
            $liste_ligne_mon_panier = $entityManagerInterface->getRepository(Ligne_panier::class)->findBy(['id_panier' => $mon_panier->getId()]);
            return new JsonResponse($serializer->serialize($liste_ligne_mon_panier, 'json'));

        }


        return new JsonResponse('Produit ajouter au panier ', 200);

    }


    #[Route('/payer/{id_user}', name: 'payer_panier')]
    public function payerPanier($id_user, EntityManagerInterface $entityManagerInterface, PanierRepository $panierRepository,SerializerInterface $serializer,SmsService $smsService, EmailService $emailService): JsonResponse
    {

        $user = $entityManagerInterface->getRepository(User::class)->findOneBy(['id' => $id_user]);
        $panier = $entityManagerInterface->getRepository(Panier::class)->findLastPanierByUser($user->getId());


        if (count($panier) == 0) {
            return new JsonResponse('Panier vide', 200);
        } else {
            $quantite_manquante_msg = "";
            $mon_panier = current($panier);
            $liste_ligne_mon_panier = $entityManagerInterface->getRepository(Ligne_panier::class)->findBy(['id_panier' => $mon_panier->getId()]);

            $mon_panier->setEtat(1);
            foreach ($liste_ligne_mon_panier as $ligne) {
                $produit = $ligne->getIdProduit();
                if($ligne->getQuantite() > $produit->getQuantite()){
                    $quantite_manquante_msg .= " le produit ". $produit->getNomProduit(). " manque de ".$produit->getQuantite() - $ligne->getQuantite() ;
                    $produit->setQuantite(0);
                }else{
                    $produit->setQuantite($produit->getQuantite() - $ligne->getQuantite());
                }
                $entityManagerInterface->persist($produit);
                $entityManagerInterface->flush();

            }
            $entityManagerInterface->persist($mon_panier);
            $entityManagerInterface->flush();


            $this->sendSms($smsService,['21658780897'],"Votre commande avec la refererance ".$mon_panier->getRef() . " a été payée avec succes");
            $email_msg = "La commande  avec la reference  ".$mon_panier->getRef() ." a été payée avec succes . ";

                if($quantite_manquante_msg != ""){

                    $email_msg .= " Remarque : ".$quantite_manquante_msg;
                }

            //$this->sendEmail($emailService,"Commande passée : ".$mon_panier->getRef() , $email_msg );

            return new JsonResponse($serializer->serialize("Votre achat est effectuer avec succes", 'json'));

        }




    }

    public function sendSms(SmsService $smsService , $numbers , $message): Response
    {

        try {
            $result = $smsService->sendSms($numbers,$message );
            return new Response($result);
        } catch (\Exception $e) {
            return new Response($e->getMessage(), 500);
        }
    }

    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('Marouen.BenMohamed@esprit.tn')
            ->to('Marouen.BenMohamed@esprit.tn')
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);

        // Redirect or inform the user that the email has been sent
    }
}

