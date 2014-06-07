<?php

/*
 * This file is part of the discussion-Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Topycs\Builder;

use Topycs\Entity\Thread;

/**
 * Class ThreadBuilder
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Builder
 */
class ThreadBuilder implements ThreadBuilderInterface
{
    /**
     * @var PostBuilderInterface
     */
    protected $postBuilder;

    /**
     * @param PostBuilderInterface $postBuilder
     */
    public function __construct(PostBuilderInterface $postBuilder)
    {
        $this->postBuilder = $postBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function buildThread($title, $content)
    {
        $thread = new Thread();

        $thread->setTitle($title);
        $thread->addPost($this->postBuilder->buildPost($content));
        
        return $thread;
    }
}
