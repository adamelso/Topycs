<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Topycs\Entity\UserInterface;

/**
 * An implementation of a UserCollectionInterface using doctrine's ArrayCollection.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity\Collection
 */
class UserCollection implements UserCollectionInterface
{
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $collection;
    
    public function __construct()
    {
        $this->collection = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function add(UserInterface $user)
    {
        $this->collection->add($user);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(UserInterface $user)
    {
        $this->collection->remove($user);
    }
}
