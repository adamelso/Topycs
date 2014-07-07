<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Discussions\Repository\Doctrine\ORM;

use Doctrine\ORM\EntityRepository;
use Topycs\Discussions\Entity\Collection\UserCollection;
use Topycs\Discussions\Entity\UserInterface;
use Topycs\Discussions\Repository\UserRepositoryInterface;

/**
 * Class ThreadRepository
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    /**
     * @var \Topycs\Discussions\Entity\Collection\UserCollectionInterface;
     */
    private $collection;
    
    public function __construct()
    {
        $this->collection = new UserCollection();
    }
    
    /**
     * {@inheritdoc}
     */
    public function add(UserInterface $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function remove(UserInterface $user)
    {
        $this->getEntityManager()->remove($user);
        $this->getEntityManager()->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function findAll()
    {
        $this->collection = parent::findAll();
        return $this->collection;
    }
}
