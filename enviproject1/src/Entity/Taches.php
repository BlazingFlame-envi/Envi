<?php

namespace App\Entity;
use App\Entity\Succes;
use App\Repository\TachesRepository;
use Doctrine\DBAL\Types\Types;
use App\Form\TachesType;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TachesRepository::class)]
class Taches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[Assert\NotBlank]
    #[Assert\GreaterThan("today")]
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_t = null; 

    #[Assert\NotBlank]
    #[Assert\Choice(['cleaning', 'preserve water','invest in energy'])]
    #[ORM\Column(length: 255)]
    private ?string $type_t = null;

    #[Assert\NotBlank]
    #[Assert\Length(
        min: 4,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    #[ORM\Column(length: 255)]
    private ?string $nom_t = null;
    
    #[Assert\PositiveOrZero]
    #[ORM\Column(nullable: true)]
    private ?int $nbpart_t = null;
    
    #[Assert\NotBlank]
    #[Assert\Length(
        min: 4,
        max: 50,
        minMessage: 'Your name must be at least {{ limit }} characters long',
        maxMessage: 'Your name cannot be longer than {{ limit }} characters',
    )]
    #[ORM\Column(length: 255)]
    private ?string $empl_t = null;

    #[ORM\ManyToOne(inversedBy: 'taches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Succes $succes = null;

    #[ORM\Column]
    private ?bool $favoris = null;


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

    public function getDateT(): ?\DateTimeInterface
    {
        return $this->date_t;
    }

    public function setDateT(\DateTimeInterface $date_t): static
    {
        $this->date_t = $date_t;

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

    public function getNomT(): ?string
    {
        return $this->nom_t;
    }

    public function setNomT(string $nom_t): static
    {
        $this->nom_t = $nom_t;

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

    public function getEmplT(): ?string
    {
        return $this->empl_t;
    }

    public function setEmplT(string $empl_t): static
    {
        $this->empl_t = $empl_t;

        return $this;
    }

    public function getSucces(): ?Succes
    {
        return $this->succes;
    }

    public function setSucces(?Succes $succes): static
    {
        $this->succes = $succes;

        return $this;
    }

    public function isFavoris(): ?bool
    {
        return $this->favoris;
    }

    public function setFavoris(bool $favoris): static
    {
        $this->favoris = $favoris;

        return $this;
    }

    

    
}

