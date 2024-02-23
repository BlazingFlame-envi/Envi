<?php

namespace App\Entity;

use App\Repository\EmplacementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EmplacementRepository::class)]
class Emplacement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Type('string')]
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 4,
        max: 15,
        minMessage: 'The emplacement name must be at least {{ limit }} characters long',
        maxMessage: 'The emplacement cannot be longer than {{ limit }} characters',
    )]
    #[ORM\Column(length: 255)]
    private ?string $nom_em = null;
    
    #[Assert\Positive]
    #[ORM\Column]
    private ?float $cout = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\OneToMany(mappedBy: 'emplacement', targetEntity: Cours::class, orphanRemoval: true)]
    private Collection $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->getNomEm();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEm(): ?string
    {
        return $this->nom_em;
    }

    public function setNomEm(string $nom_em): static
    {
        $this->nom_em = $nom_em;

        return $this;
    }

    public function getCout(): ?float
    {
        return $this->cout;
    }

    public function setCout(float $cout): static
    {
        $this->cout = $cout;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): static
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->setEmplacement($this);
        }

        return $this;
    }

    public function removeCour(Cours $cour): static
    {
        if ($this->cours->removeElement($cour)) {
            // set the owning side to null (unless already changed)
            if ($cour->getEmplacement() === $this) {
                $cour->setEmplacement(null);
            }
        }

        return $this;
    }
}
