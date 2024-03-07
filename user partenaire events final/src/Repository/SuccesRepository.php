<?php

namespace App\Repository;

use App\Entity\Succes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;

/**
 * @extends ServiceEntityRepository<Succes>
 *
 * @method Succes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Succes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Succes[]    findAll()
 * @method Succes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SuccesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Succes::class);
    }

//    /**
//     * @return Succes[] Returns an array of Succes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Succes
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

public function getEntrepriseByUser($user)
    {
        return $this->createQueryBuilder('e')
            ->where('e.user = :user')
            ->setParameter('user', $user) 
            ->getQuery()
            ->getResult();
    }

}
