<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Equipement;
use App\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


  #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom ne doit contenir que des lettres.'
    )]

    #[ORM\Column(length: 255)]
    private ?string $nom_fr = null;


    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
#[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom ne doit contenir que des lettres.'
    )]

    #[ORM\Column(length: 255)]
    private ?string $prenom_fr = null;
#[Assert\Regex(
    pattern: '/^\d+$/',
    message: 'This field should only contain positive numbers and cannot include negative numbers.'
)]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
    #[Assert\Regex(
        pattern: '/^\d+$/',
        message: 'Ce champ doit contenir uniquement des chiffres.'
    )]
    #[ORM\Column]
    private ?int $age_fr = null;

    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
     #[Assert\Regex(
        pattern: '/^(?=.*[a-zA-Z])(?=.*\d).+$/',
        message: 'Ce champ doit contenir obligatoirement des lettres et des chiffres.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $adress_fr = null;

    #[ORM\ManyToOne(inversedBy: 'fournisseurs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipement $equipement = null;

    #[ORM\ManyToOne(inversedBy: 'user')]
    #[ORM\JoinColumn(name:"id_user",nullable: false)]
    private ?User $user = null;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFr(): ?string
    {
        return $this->nom_fr;
    }

    public function setNomFr(string $nom_fr): static
    {
        $this->nom_fr = $nom_fr;

        return $this;
    }

    public function getPrenomFr(): ?string
    {
        return $this->prenom_fr;
    }

    public function setPrenomFr(string $prenom_fr): static
    {
        $this->prenom_fr = $prenom_fr;

        return $this;
    }

    public function getAgeFr(): ?int
    {
        return $this->age_fr;
    }

    public function setAgeFr(int $age_fr): static
    {
        $this->age_fr = $age_fr;

        return $this;
    }

    public function getAdressFr(): ?string
    {
        return $this->adress_fr;
    }

    public function setAdressFr(string $adress_fr): static
    {
        $this->adress_fr = $adress_fr;

        return $this;
    }

    public function getEquipement(): ?Equipement
    {
        return $this->equipement;
    }

    public function setEquipement(?Equipement $equipement): static
    {
        $this->equipement = $equipement;

        return $this;
    }
}
