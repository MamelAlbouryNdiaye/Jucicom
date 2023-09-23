<?php

namespace App\Repository;

use App\Entity\DocumentsAnnexes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DocumentsAnnexes>
 *
 * @method DocumentsAnnexes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DocumentsAnnexes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DocumentsAnnexes[]    findAll()
 * @method DocumentsAnnexes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DocumentsAnnexesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DocumentsAnnexes::class);
    }

//    /**
//     * @return DocumentsAnnexes[] Returns an array of DocumentsAnnexes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DocumentsAnnexes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
