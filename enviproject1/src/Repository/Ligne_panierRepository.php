<?php

namespace App\Repository;


use App\Entity\Ligne_panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class Ligne_panierRepository extends ServiceEntityRepository
{
    public function findByPanierAndProduit($id_panier , $id_produit)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id_panier = :id_panier')
            ->andWhere('p.id_produit = :id_produit')
            ->setParameter('id_panier', $id_panier)
            ->setParameter('id_produit', $id_produit)
            ->getQuery()
            ->getResult();
    }



    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ligne_panier::class);
    }


}
