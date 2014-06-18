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

use Topycs\Entity\UserInterface;

/**
 * Defines a User Repository.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
interface UserRepositoryInterface
{
    /**
     * Adds a user.
     * 
     * @param \Topycs\Entity\UserInterface $user
     */
    public function add(UserInterface $user);

    /**
     * Removes a user.
     * 
     * @param \Topycs\Entity\UserInterface $user
     */
    public function remove(UserInterface $user);

    /**
     * Finds all users.
     * 
     * @return \Topycs\Entity\Collection\UserCollection
     */
    public function findAll();

    /**
     * Gets a user by its id.
     * 
     * @param int $userId
     * @return \Topycs\Entity\UserInterface
     */
    public function get($userId);
}
