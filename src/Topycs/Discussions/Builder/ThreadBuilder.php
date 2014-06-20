<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Topycs\Discussions\Builder;

use Topycs\Discussions\Entity\Thread;

/**
 * Class ThreadBuilder
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Builder
 */
class ThreadBuilder implements ThreadBuilderInterface
{
    /**
     * @var \Topycs\Discussions\Builder\PostBuilderInterface
     */
    protected $postBuilder;

    /**
     * @param \Topycs\Discussions\Builder\PostBuilderInterface $postBuilder
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
