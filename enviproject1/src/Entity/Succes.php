<?php

namespace App\Entity;

use App\Repository\SuccesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SuccesRepository::class)]
class Succes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type_s = null;

    #[ORM\Column(length: 255)]
    private ?string $nombenef_s = null;

    #[ORM\Column(length: 255)]
    private ?string $noms_sponsor = null;

    #[ORM\OneToMany(mappedBy: 'succes', targetEntity: Taches::class, orphanRemoval: true)]
    private Collection $taches;

    public function __construct()
    {
        $this->taches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeS(): ?string
    {
        return $this->type_s;
    }

    public function setTypeS(string $type_s): static
    {
        $this->type_s = $type_s;

        return $this;
    }

    public function getNombenefS(): ?string
    {
        return $this->nombenef_s;
    }

    public function setNombenefS(string $nombenef_s): static
    {
        $this->nombenef_s = $nombenef_s;

        return $this;
    }

    public function getNomSponsor(): ?string
    {
        return $this->nom_sponsor;
    }

    public function setNomSponsor(string $nom_sponsor): static
    {
        $this->noms_sponsor = $nom_sponsor;

        return $this;
    }

    /**
     * @return Collection<int, Taches>
     */
    public function getTaches(): Collection
    {
        return $this->taches;
    }

    public function addTach(Taches $tach): static
    {
        if (!$this->taches->contains($tach)) {
            $this->taches->add($tach);
            $tach->setSucces($this);
        }

        return $this;
    }

    public function removeTach(Taches $tach): static
    {
        if ($this->taches->removeElement($tach)) {
            // set the owning side to null (unless already changed)
            if ($tach->getSucces() === $this) {
                $tach->setSucces(null);
            }
        }

        return $this;
    }
}
