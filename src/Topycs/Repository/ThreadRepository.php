<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Repository;

use Doctrine\ORM\EntityRepository;
use Topycs\Entity\CategoryInterface;
use Topycs\Entity\Collection\ThreadCollection;

/**
 * Class ThreadRepository
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
class ThreadRepository extends EntityRepository implements ThreadRepositoryInterface
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
     * {@inheritdoc}
     */
    public function findByCategory(CategoryInterface $category)
    {
        $qb = $this->createQueryBuilder('t');
        
        $threads = new ThreadCollection($qb->getQuery()->getResult());
        
        return $threads;
    }

    /**
     * {@inheritdoc}
     */
    public function findLatest()
    {
        $qb = $this->createQueryBuilder('t');

        $threads = new ThreadCollection($qb->getQuery()->getResult());

        return $threads;
    }
}
