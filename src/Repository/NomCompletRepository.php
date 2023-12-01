<?php

namespace App\Repository;

use App\Entity\NomComplet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NomComplet>
 *
 * @method NomComplet|null find($id, $lockMode = null, $lockVersion = null)
 * @method NomComplet|null findOneBy(array $criteria, array $orderBy = null)
 * @method NomComplet[]    findAll()
 * @method NomComplet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NomCompletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NomComplet::class);
    }

//    /**
//     * @return NomComplet[] Returns an array of NomComplet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NomComplet
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
