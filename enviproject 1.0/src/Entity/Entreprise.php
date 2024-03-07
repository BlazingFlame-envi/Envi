<?php

namespace App\Entity;

use App\Repository\EntrepriseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EntrepriseRepository::class)]
class Entreprise
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
    private ?string $nom_e = null;

    #[ORM\Column(length: 255)]
    private ?string $emplacement = null;

    #[Assert\Length(
        exactMessage: 'Le numéro de téléphone doit contenir exactement {{ limit }} chiffres.',
        min: 8,
        max: 8
    )]
    #[Assert\Regex(
        pattern: '/^[0-9]*$/',
        message: 'Le numéro de téléphone ne doit contenir que des chiffres.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $tel = null;

    #[Assert\Regex(
        pattern: '/^\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}\b$/',
        message: 'L\'adresse email doit être valide.'
    )]
    #[ORM\Column(length: 255)]
    private ?string $mail_e = null;

    #[ORM\OneToMany(mappedBy: 'entreprise', targetEntity: Offre::class,orphanRemoval: true)]
    private Collection $offres;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

      // Ajoutez un attribut pour gérer le fichier uploadé, qui ne sera pas persisté en base de données
    /**
     * @Vich\UploadableField(mapping="product_images", fileNameProperty="image")
     */
    private $imageFile;

    public function __construct()
    {
        $this->offres = new ArrayCollection();
    }


    public function __toString(): string
    {
        return $this->getNomE() ;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomE(): ?string
    {
        return $this->nom_e;
    }

    public function setNomE(string $nom_e): static
    {
        $this->nom_e = $nom_e;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->emplacement;
    }

    public function setEmplacement(string $emplacement): static
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMailE(): ?string
    {
        return $this->mail_e;
    }

    public function setMailE(string $mail_e): static
    {
        $this->mail_e = $mail_e;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImageFile(): ?string
    {
        return $this->imageFile;
    }

    public function setImageFile(string $imageFile): static
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    


    /**
     * @return Collection<int, Offre>
     */
    public function getOffres(): Collection
    {
        return $this->offres;
    }

    public function addOffre(Offre $offre): static
    {
        if (!$this->offres->contains($offre)) {
            $this->offres->add($offre);
            $offre->setEntreprise($this);
        }

        return $this;
    }

    public function removeOffre(Offre $offre): static
    {
        if ($this->offres->removeElement($offre)) {
            // set the owning side to null (unless already changed)
            if ($offre->getEntreprise() === $this) {
                $offre->setEntreprise(null);
            }
        }

        return $this;
    }
}
