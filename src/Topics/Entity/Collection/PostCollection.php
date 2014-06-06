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

use Topics\Entity\PostInterface;

/**
 * A collection of Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Entity\Collection
 */
class PostCollection extends \ArrayObject
{
    /**
     * {@inheritdoc}
     */
    public function append($value)
    {
        if (!$value instanceof PostInterface) {
            throw new \InvalidArgumentException(
                sprintf('Expected \Topics\Entity\PostInterface, got %s.', get_class($value))
            );
        }
    }
}
