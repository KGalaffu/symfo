<?php

namespace App\Repository;

use App\Entity\LivresLocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LivresLocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LivresLocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LivresLocation[]    findAll()
 * @method LivresLocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LivresLocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LivresLocation::class);
    }

    // /**
    //  * @return LivresLocation[] Returns an array of LivresLocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LivresLocation
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
