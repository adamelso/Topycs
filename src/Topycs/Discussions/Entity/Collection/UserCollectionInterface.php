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

use Topycs\Discussions\Entity\UserInterface;

/**
 * A collection of User.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity\Collection
 */
interface UserCollectionInterface
{
    /**
     * Adds a user.
     *
     * @param \Topycs\Discussions\Entity\UserInterface $user
     */
    public function add(UserInterface $user);

    /**
     * Removes a user.
     *
     * @param \Topycs\Discussions\Entity\UserInterface $user
     */
    public function remove(UserInterface $user);
}
