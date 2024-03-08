<?php

namespace App\Entity;


use App\Repository\PanierRepository;
use Doctrine\Common\Collections\Collection;


class PanierDTO
{

    private $id ;


    private $ref ;


    private $dateCreation;

    private $etat;

    private  $id_user ;


    private  $ligne_paniers;

    private $prixTotal;
    public function __construct()
{
}

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     */
    public function setRef($ref): void
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation): void
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getLignePaniers()
    {
        return $this->ligne_paniers;
    }

    /**
     * @param mixed $ligne_paniers
     */
    public function setLignePaniers($ligne_paniers): void
    {
        $this->ligne_paniers = $ligne_paniers;
    }

    /**
     * @return mixed
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * @param mixed $prixTotal
     */
    public function setPrixTotal($prixTotal): void
    {
        $this->prixTotal = $prixTotal;
    }





}
