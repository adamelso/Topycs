<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Entity\Collection;

use Topics\Entity\ThreadInterface;

/**
 * A collection of Thread.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Entity\Collection
 */
class ThreadCollection extends \ArrayObject
{
    /**
     * {@inheritdoc}
     */
    public function append($value)
    {
        if (!$value instanceof ThreadInterface) {
            throw new \InvalidArgumentException(
                sprintf('Expected \Topics\Entity\ThreadInterface, got %s.', get_class($value))
            );
        }
    }
}
