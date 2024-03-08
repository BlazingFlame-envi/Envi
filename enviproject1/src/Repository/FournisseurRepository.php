<?php

namespace App\Repository;

use App\Entity\Fournisseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Fournisseur>
 *
 * @method Fournisseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fournisseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fournisseur[]    findAll()
 * @method Fournisseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FournisseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Fournisseur::class);
    }




    
      public function getFournisseurby()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.nom_fr', 'ASC') // Assuming 'nom_eq' is the name field in the Materiel entity
            ->getQuery()
            ->getResult();
    }



    
      public function getFournisseurbyage()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.age_fr', 'ASC') // Assuming 'nom_eq' is the name field in the Materiel entity
            ->getQuery()
            ->getResult();
    }


//    /**
//     * @return Fournisseur[] Returns an array of Fournisseur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Fournisseur
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
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
