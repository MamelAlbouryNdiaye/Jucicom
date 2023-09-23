<?php

namespace App\Repository;

use App\Entity\Matériel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Matériel>
 *
 * @method Matériel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matériel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matériel[]    findAll()
 * @method Matériel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatérielRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Matériel::class);
    }

//    /**
//     * @return Matériel[] Returns an array of Matériel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Matériel
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
