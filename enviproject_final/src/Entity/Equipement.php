<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom ne doit contenir que des lettres.'
    )]

    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
    #[ORM\Column(length: 255)]
    private ?string $nom_eq = null;

        
    
    
     #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
     #[Assert\Regex(
        pattern: '/^(?=.*[a-zA-Z])(?=.*\d).+$/',
        message: 'Ce champ doit contenir obligatoirement des lettres et des chiffres.'
    )]
    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
    #[ORM\Column(length: 255)]
    private ?string $type_eq = null;

        #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
       
    #[ORM\Column(length: 255)]
    private ?string $disponibilite_eq = null;

        #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
    #[ORM\Column]
    private ?int $quantite_eq = null;


    #[Assert\NotBlank(message: 'Ce champ ne peut pas être vide.')]
#[Assert\Regex(
    pattern: '/^\d+\.\d+$/',
    message: 'This field must contain a floating-point number with a mandatory decimal part.'
)]

    #[ORM\Column]
    private ?float $prix_eq = null;

    #[ORM\OneToMany(mappedBy: 'equipement', targetEntity: Fournisseur::class, orphanRemoval: true)]
    private Collection $fournisseurs;

    public function __toString()
    {
        return $this->getNomEq();
    }
    public function __construct()
    {
        $this->fournisseurs = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): static
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs->add($fournisseur);
            $fournisseur->setEquipement($this);
        }

        return $this;
    }

  
}
