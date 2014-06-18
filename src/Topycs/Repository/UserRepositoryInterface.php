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

use Topycs\Entity\Collection\UserCollectionInterface;

/**
 * Defines a User Repository.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
interface UserRepositoryInterface extends UserCollectionInterface
{
    /**
     * Finds all users.
     * 
     * @return \Topycs\Entity\Collection\UserCollectionInterface
     */
    public function findAll();
}
