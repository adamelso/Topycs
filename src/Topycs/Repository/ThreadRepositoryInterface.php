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

use Topycs\Entity\CategoryInterface;
use Topycs\Entity\ThreadInterface;

/**
 * Defines a Thread Repository.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
interface ThreadRepositoryInterface
{
    /**
     * Adds a thread.
     *
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function add(ThreadInterface $thread);

    /**
     * Removes a thread.
     *
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function remove(ThreadInterface $thread);

    /**
     * Finds all threads.
     *
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function findAll();

    /**
     * Gets a thread by its id.
     * 
     * @param int $threadId
     * @return \Topycs\Entity\ThreadInterface
     */
    public function get($threadId);
    
    /**
     * Finds the latest threads.
     * 
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function findLatest();

    /**
     * Finds threads by category.
     * 
     * @param \Topycs\Entity\CategoryInterface $category
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function findByCategory(CategoryInterface $category);
}
