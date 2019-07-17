<?php

namespace App\Repository;

use App\Entity\PublicType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PublicType|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicType|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicType[]    findAll()
 * @method PublicType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PublicType::class);
    }

    // /**
    //  * @return PublicType[] Returns an array of PublicType objects
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
    public function findOneBySomeField($value): ?PublicType
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
