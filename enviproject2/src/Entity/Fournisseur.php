<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_fr = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_fr = null;

    #[ORM\Column]
    private ?int $age_fr = null;

    #[ORM\Column(length: 255)]
    private ?string $adress_fr = null;

    #[ORM\OneToMany(mappedBy: 'fournisseur', targetEntity: Equipement::class, orphanRemoval: true)]
    private Collection $equipement;

    public function __construct()
    {
        $this->equipement = new ArrayCollection();
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

    /**
     * @return Collection<int, Equipement>
     */
    public function getEquipement(): Collection
    {
        return $this->equipement;
    }

    public function addEquipement(Equipement $equipement): static
    {
        if (!$this->equipement->contains($equipement)) {
            $this->equipement->add($equipement);
            $equipement->setFournisseur($this);
        }

        return $this;
    }

    public function removeEquipement(Equipement $equipement): static
    {
        if ($this->equipement->removeElement($equipement)) {
            // set the owning side to null (unless already changed)
            if ($equipement->getFournisseur() === $this) {
                $equipement->setFournisseur(null);
            }
        }

        return $this;
    }
}
