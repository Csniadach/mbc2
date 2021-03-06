<?php

namespace Main\MainBundle\Repository;

/**
 * EventsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OffresRepository extends \Doctrine\ORM\EntityRepository
{
    public function search($result)
    {
        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.name LIKE :result')
            ->orderBy('u.id')
            ->setParameter('result', '%'.$result.'%');
        return $qb->getQuery()->getResult();
    }
}
