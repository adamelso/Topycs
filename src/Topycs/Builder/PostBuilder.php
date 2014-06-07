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
use Topycs\Entity\Post;

/**
 * Class PostBuilder
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Builder
 */
class PostBuilder implements PostBuilderInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildPost($content)
    {
        $post = new Post();
        
        $post->setContent($content);
        
        return $post;
    }
}
