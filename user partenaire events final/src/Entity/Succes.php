<?php

namespace App\Entity;

use App\Repository\SuccesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SuccesRepository::class)]
class Succes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    

    #[Assert\NotBlank]
    #[Assert\Choice(['money', 'reduction','certificate'])]
    #[ORM\Column(length: 255)]
    private ?string $type_s = null;


    #[Assert\NotBlank]
    #[Assert\Length(
        min: 4,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    #[ORM\Column(length: 255)]
    private ?string $nombenef_s = null;


    #[Assert\NotBlank]
    #[Assert\Length(
        min: 4,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    #[ORM\Column(length: 255)]
    private ?string $nomspon_s = null;

    #[ORM\OneToMany(mappedBy: 'succes', targetEntity: Taches::class, orphanRemoval: true)]
    private Collection $taches;


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

    public function __construct()
    {
        $this->taches = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getTypeS();
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

    public function getNomsponS(): ?string
    {
        return $this->nomspon_s;
    }

    public function setNomsponS(string $nomspon_s): static
    {
        $this->nomspon_s = $nomspon_s;

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
