<?php

namespace App\Entity;


use App\Repository\Ligne_panierRepository;
use App\Repository\PanierRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Ligne_panierRepository::class)]
class Ligne_panier
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;



    #[ORM\ManyToOne(targetEntity: Produit::class, fetch: 'EAGER')]
    #[ORM\JoinColumn(name: "id_produit", referencedColumnName: "id", nullable: true)]
    private ?Produit $id_produit = null;

    #[ORM\ManyToOne(inversedBy: 'Panier')]
    #[ORM\JoinColumn(name: "id_panier", nullable: true)]
    private ?Panier $id_panier = null;


    public function __construct()
{
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): void
    {
        $this->quantite = $quantite;
    }

    public function getIdProduit(): ?Produit
    {
        return $this->id_produit;
    }

    public function setIdProduit(?Produit $id_produit): void
    {
        $this->id_produit = $id_produit;
    }

    public function getIdPanier(): ?Panier
    {
        return $this->id_panier;
    }

    public function setIdPanier(?Panier $id_panier): void
    {
        $this->id_panier = $id_panier;
    }



}
