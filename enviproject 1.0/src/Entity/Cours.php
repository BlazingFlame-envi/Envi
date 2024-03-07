<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_c = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_tuteur = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_c = null;

    #[ORM\Column]
    private ?int $duree_c = null;

    #[ORM\ManyToOne(inversedBy: 'cours')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Emplacement $emplacement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomC(): ?string
    {
        return $this->nom_c;
    }

    public function setNomC(string $nom_c): static
    {
        $this->nom_c = $nom_c;

        return $this;
    }

    public function getNomTuteur(): ?string
    {
        return $this->nom_tuteur;
    }

    public function setNomTuteur(string $nom_tuteur): static
    {
        $this->nom_tuteur = $nom_tuteur;

        return $this;
    }

    public function getDateC(): ?\DateTimeInterface
    {
        return $this->date_c;
    }

    public function setDateC(\DateTimeInterface $date_c): static
    {
        $this->date_c = $date_c;

        return $this;
    }

    public function getDureeC(): ?int
    {
        return $this->duree_c;
    }

    public function setDureeC(int $duree_c): static
    {
        $this->duree_c = $duree_c;

        return $this;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(?Emplacement $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}
