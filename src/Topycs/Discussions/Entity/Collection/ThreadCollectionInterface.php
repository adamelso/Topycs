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

/**
 * A collection of Thread.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity\Collection
 */
interface ThreadCollectionInterface
{
    /**
     * Adds a thread.
     *
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     */
    public function add(ThreadInterface $thread);

    /**
     * Removes a thread.
     *
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     */
    public function remove(ThreadInterface $thread);
}
