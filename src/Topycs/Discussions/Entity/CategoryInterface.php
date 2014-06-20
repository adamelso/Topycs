<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Discussions\Entity;

use Topycs\Discussions\Entity\Collection\ThreadCollectionInterface;

/**
 * Defines a Category.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
 */
interface CategoryInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @throws \InvalidArgumentException
     */
    public function setName($name);
    
    /**
     * @return mixed
     */
    public function getDescription();

    /**
     * @param string $description
     * @throws \InvalidArgumentException
     */
    public function setDescription($description);

    /**
     * @return \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    public function getThreads();

    /**
     * @param \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface $threads
     */
    public function setThreads(ThreadCollectionInterface $threads);

    /**
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread);
}
