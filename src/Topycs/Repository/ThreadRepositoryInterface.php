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

/**
 * Defines a Thread Repository.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
interface ThreadRepositoryInterface
{
    /**
     * Finds the latest threads.
     * 
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function findLatest();

    /**
     * Finds threads by category.
     * 
     * @param CategoryInterface $category
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function findByCategory(CategoryInterface $category);
}
