<?php

namespace App\Repository;


use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class ProduitRepository extends ServiceEntityRepository
{

    public function findByCategorie($categorieId)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id_categorie = :categorieId')
            ->setParameter('categorieId', $categorieId)
            ->getQuery()
            ->getResult();
    }

    public function findAllByOrderPrice($order)
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.prix', $order)
            ->getQuery()
            ->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }


}
