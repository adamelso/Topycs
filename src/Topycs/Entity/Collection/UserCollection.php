<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity\Collection;

use Doctrine\Common\Collections\ArrayCollection;
use Topycs\Entity\UserInterface;

/**
 * A collection of User.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity\Collection
 */
class UserCollection extends ArrayCollection
{
    /**
     * {@inheritdoc}
     */
    public function add($value)
    {
        if (!$value instanceof UserInterface) {
            throw new \InvalidArgumentException(
                sprintf('Expected \Topycs\Entity\UserInterface, got %s.', get_class($value))
            );
        }
        
        parent::add($value);
    }
}
