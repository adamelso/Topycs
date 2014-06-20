<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\DiscussionPlatform\Specification\Thread;

use Topycs\Discussions\Entity\ThreadInterface;

/**
 * Defines a Thread Specification Interface.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\DiscussionPlatform\Specification\Thread
 */
interface ThreadSpecificationInterface
{
    /**
     * Checks if the specification is satisfied by a thread.
     * 
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     * @return bool
     */
    public function isSatisfiedBy(ThreadInterface $thread);
}
