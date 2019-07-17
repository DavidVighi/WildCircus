<?php

namespace App\Repository;

use App\Entity\Textjumbotron;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Textjumbotron|null find($id, $lockMode = null, $lockVersion = null)
 * @method Textjumbotron|null findOneBy(array $criteria, array $orderBy = null)
 * @method Textjumbotron[]    findAll()
 * @method Textjumbotron[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TextjumbotronRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Textjumbotron::class);
    }

    // /**
    //  * @return Textjumbotron[] Returns an array of Textjumbotron objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Textjumbotron
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
