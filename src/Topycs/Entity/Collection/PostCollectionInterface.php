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

use Topycs\Entity\PostInterface;

/**
 * A collection of Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity\Collection
 */
interface PostCollectionInterface
{
    /**
     * Adds a thread.
     *
     * @param \Topycs\Entity\PostInterface $post
     */
    public function add(PostInterface $post);

    /**
     * Removes a thread.
     *
     * @param \Topycs\Entity\PostInterface $post
     */
    public function remove(PostInterface $post);

    /**
     * Gets a thread by the key on the collection.
     * 
     * @param int $key
     * @return \Topycs\Entity\PostInterface
     */
    public function get($key);
}
