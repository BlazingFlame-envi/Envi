<?php

namespace App\Repository;


use App\Entity\Panier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class PanierRepository extends ServiceEntityRepository
{

    public function findLastPanierByUser($id_user)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.id_user = :id_user')
            ->andWhere('p.etat = 0')
            ->setParameter('id_user', $id_user)
            ->getQuery()
            ->getResult();
    }

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
    }


}
