<?php

namespace App\Repository;

use App\Entity\CompetencesReseau;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CompetencesReseau>
 *
 * @method CompetencesReseau|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetencesReseau|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetencesReseau[]    findAll()
 * @method CompetencesReseau[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetencesReseauRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetencesReseau::class);
    }

//    /**
//     * @return CompetencesReseau[] Returns an array of CompetencesReseau objects
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

//    public function findOneBySomeField($value): ?CompetencesReseau
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
