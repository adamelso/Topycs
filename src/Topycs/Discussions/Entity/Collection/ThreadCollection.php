<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Discussions\Entity\Collection;

use Topycs\Discussions\Entity\ThreadInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * An implementation of a ThreadCollectionInterface using doctrine's ArrayCollection.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity\Collection
 */
class ThreadCollection implements ThreadCollectionInterface
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
    public function add(ThreadInterface $thread)
    {
        $this->collection->add($thread);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(ThreadInterface $thread)
    {
        $this->collection->remove($thread);
    }
}
