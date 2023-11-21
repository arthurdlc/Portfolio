<?php

namespace App\Repository;

use App\Entity\CompetencesSLAM;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompetencesSLAM>
 *
 * @method CompetencesSLAM|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetencesSLAM|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetencesSLAM[]    findAll()
 * @method CompetencesSLAM[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetencesSLAMRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetencesSLAM::class);
    }

//    /**
//     * @return CompetencesSLAM[] Returns an array of CompetencesSLAM objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CompetencesSLAM
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
