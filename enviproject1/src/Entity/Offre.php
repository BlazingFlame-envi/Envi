<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\Regex(
        pattern: '/^[a-zA-Z]+$/',
        message: 'Le nom ne doit contenir que des lettres.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $nom_o = null;

    #[ORM\Column(length: 255)]
    private ?string $type_o = null;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Entreprise $entreprise = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomO(): ?string
    {
        return $this->nom_o;
    }

    public function setNomO(string $nom_o): static
    {
        $this->nom_o = $nom_o;

        return $this;
    }

    public function getTypeO(): ?string
    {
        return $this->type_o;
    }

    public function setTypeO(string $type_o): static
    {
        $this->type_o = $type_o;

        return $this;
    }

    public function getEntreprise(): ?Entreprise
    {
        return $this->entreprise;
    }

    public function setEntreprise(?Entreprise $entreprise): static
    {
        $this->entreprise = $entreprise;

        return $this;
    }
}
