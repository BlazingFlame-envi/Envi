<?php

namespace App\Repository;
use App\Entity\Equipement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @extends ServiceEntityRepository<Equipement>
 *
 * @method Equipement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Equipement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Equipement[]    findAll()
 * @method Equipement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EquipementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Equipement::class);
    }




      public function getStudentOrdredByName()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.nom_eq', 'ASC') // Assuming 'nom_eq' is the name field in the Materiel entity
            ->getQuery()
            ->getResult();
    }
    public function getStudentOrdredByrpix()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.prix_eq', 'ASC') // Assuming 'nom_eq' is the name field in the Materiel entity
            ->getQuery()
            ->getResult();
    }

    public function getEntrepriseByUser($user)
    {
        return $this->createQueryBuilder('e')
            ->where('e.user = :user')
            ->setParameter('user', $user) 
            ->getQuery()
            ->getResult();
    }

    
//    /**
//     * @return Equipement[] Returns an array of Equipement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Equipement
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
