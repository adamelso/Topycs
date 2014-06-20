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

use Topycs\Discussions\Entity\PostInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * A collection of Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Discussions\Entity\Collection
 */
class PostCollection implements PostCollectionInterface
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
    public function add(PostInterface $post)
    {
        $this->collection->add($post);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(PostInterface $post)
    {
        $this->collection->remove($post);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->collection->get($key);
    }
}
