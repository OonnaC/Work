<?php

namespace App\Repository;

use App\Entity\Simul;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Simul|null find($id, $lockMode = null, $lockVersion = null)
 * @method Simul|null findOneBy(array $criteria, array $orderBy = null)
 * @method Simul[]    findAll()
 * @method Simul[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SimulRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Simul::class);
    }

    // /**
    //  * @return Simul[] Returns an array of Simul objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Simul
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
