<?php

namespace App\Repository;

use App\Entity\ResultatAudit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ResultatAudit>
 *
 * @method ResultatAudit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResultatAudit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResultatAudit[]    findAll()
 * @method ResultatAudit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResultatAuditRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResultatAudit::class);
    }

//    /**
//     * @return ResultatAudit[] Returns an array of ResultatAudit objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ResultatAudit
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
