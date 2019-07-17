<?php

namespace App\Repository;

use App\Entity\Performancesimage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Performancesimage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Performancesimage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Performancesimage[]    findAll()
 * @method Performancesimage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PerformancesimageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Performancesimage::class);
    }

    // /**
    //  * @return Performancesimage[] Returns an array of Performancesimage objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Performancesimage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
