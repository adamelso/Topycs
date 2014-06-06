<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Repository;

use Doctrine\ORM\EntityRepository;
use Topics\Entity\CategoryInterface;

/**
 * Class ThreadRepository
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Repository
 */
class ThreadRepository extends EntityRepository
{
    /**
     * {@inheritdoc}
     */
    public function createQueryBuilder($alias)
    {
        $qb = parent::createQueryBuilder($alias);
        
        $qb
            ->addOrderBy(sprintf('%s.isPinned', $alias), 'DESC')
            ->addOrderBy(sprintf('%s.createdAt', $alias), 'DESC');
        
        return $qb; 
    }

    /**
     * @param \Topics\Entity\CategoryInterface $category
     * @return \Doctrine\Common\Collections\Collection
     */
    public function findByCategory(CategoryInterface $category = null)
    {
        $qb = $this->createQueryBuilder('t');
        
        return $qb->getQuery()->getResult();
    }
}
