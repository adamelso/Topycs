<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Entity;

/**
 * Defines a Category.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Entity
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
}
