<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_eq = null;

    #[ORM\Column(length: 255)]
    private ?string $type_eq = null;

    #[ORM\Column(length: 255)]
    private ?string $disponibilite_eq = null;

    #[ORM\Column]
    private ?int $quantite_eq = null;

    #[ORM\Column]
    private ?float $prix_eq = null;

    #[ORM\ManyToOne(inversedBy: 'equipement')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Fournisseur $fournisseur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEq(): ?string
    {
        return $this->nom_eq;
    }

    public function setNomEq(string $nom_eq): static
    {
        $this->nom_eq = $nom_eq;

        return $this;
    }

    public function getTypeEq(): ?string
    {
        return $this->type_eq;
    }

    public function setTypeEq(string $type_eq): static
    {
        $this->type_eq = $type_eq;

        return $this;
    }

    public function getDisponibiliteEq(): ?string
    {
        return $this->disponibilite_eq;
    }

    public function setDisponibiliteEq(string $disponibilite_eq): static
    {
        $this->disponibilite_eq = $disponibilite_eq;

        return $this;
    }

    public function getQuantiteEq(): ?int
    {
        return $this->quantite_eq;
    }

    public function setQuantiteEq(int $quantite_eq): static
    {
        $this->quantite_eq = $quantite_eq;

        return $this;
    }

    public function getPrixEq(): ?float
    {
        return $this->prix_eq;
    }

    public function setPrixEq(float $prix_eq): static
    {
        $this->prix_eq = $prix_eq;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): static
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
