<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Repository\ORM;

use Doctrine\ORM\EntityRepository;
use Topycs\Repository\UserRepositoryInterface;

/**
 * Class ThreadRepository
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Repository
 */
class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    
}
