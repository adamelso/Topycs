<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Topycs\Builder;

/**
 * Defines a fluent builder for posts.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Builder
 */
interface PostBuilderInterface
{
    /**
     * Builds a new post.
     * 
     * @param string $content
     * @return \Topycs\Entity\PostInterface
     */
    public function buildPost($content);
}
