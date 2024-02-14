<?php

namespace App\Entity;

use App\Repository\TachesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TachesRepository::class)]
class Taches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_t = null;

    #[ORM\Column(length: 255)]
    private ?string $type_t = null;

    #[ORM\Column(length: 255)]
    private ?string $empl_t = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_t = null;

    #[ORM\Column(nullable: true)]
    private ?int $nbpart_t = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomT(): ?string
    {
        return $this->nom_t;
    }

    public function setNomT(string $nom_t): static
    {
        $this->nom_t = $nom_t;

        return $this;
    }

    public function getTypeT(): ?string
    {
        return $this->type_t;
    }

    public function setTypeT(string $type_t): static
    {
        $this->type_t = $type_t;

        return $this;
    }

    public function getEmplT(): ?string
    {
        return $this->empl_t;
    }

    public function setEmplT(string $empl_t): static
    {
        $this->empl_t = $empl_t;

        return $this;
    }

    public function getDateT(): ?\DateTimeInterface
    {
        return $this->date_t;
    }

    public function setDateT(\DateTimeInterface $date_t): static
    {
        $this->date_t = $date_t;

        return $this;
    }

    public function getNbpartT(): ?int
    {
        return $this->nbpart_t;
    }

    public function setNbpartT(?int $nbpart_t): static
    {
        $this->nbpart_t = $nbpart_t;

        return $this;
    }
}
