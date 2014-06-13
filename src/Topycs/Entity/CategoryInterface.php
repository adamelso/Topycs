<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity;
use Topycs\Entity\Collection\ThreadCollection;

/**
 * Defines a Category.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
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
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function getThreads();

    /**
     * @param \Topycs\Entity\Collection\ThreadCollection $threads
     */
    public function setThreads(ThreadCollection $threads);

    /**
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread);
}
