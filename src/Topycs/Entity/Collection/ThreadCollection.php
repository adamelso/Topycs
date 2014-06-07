<?php

/*
 * This file is part of the discussion-Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity\Collection;

use Topycs\Entity\ThreadInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * A collection of Thread.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity\Collection
 */
class ThreadCollection extends ArrayCollection
{
    /**
     * {@inheritdoc}
     */
    public function add($value)
    {
        if (!$value instanceof ThreadInterface) {
            throw new \InvalidArgumentException(
                sprintf('Expected \Topycs\Entity\ThreadInterface, got %s.', get_class($value))
            );
        }
    }
}
