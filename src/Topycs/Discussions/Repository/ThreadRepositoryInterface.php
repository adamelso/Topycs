<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Discussions\Repository;

use Topycs\Discussions\Entity\CategoryInterface;
use Topycs\Discussions\Entity\Collection\ThreadCollectionInterface;

/**
 * Defines a Thread Repository.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
interface ThreadRepositoryInterface extends ThreadCollectionInterface
{
    /**
     * Finds all threads.
     *
     * @return \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    public function findAll();

    /**
     * Finds the latest threads.
     * 
     * @return \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    public function findLatest();

    /**
     * Finds threads by category.
     * 
     * @param \Topycs\Discussions\Entity\CategoryInterface $category
     * @return \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    public function findByCategory(CategoryInterface $category);
}
