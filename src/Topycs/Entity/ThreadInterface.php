<?php

/*
 * This file is part of the discussion-Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity;

use Topycs\Entity\Collection\PostCollection;

/**
 * Defines a Thread.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 */
interface ThreadInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @throws \InvalidArgumentException
     */
    public function setTitle($title);
    
    /**
     * @return \Topycs\Entity\Collection\PostCollection
     */
    public function getPosts();

    /**
     * @param \Topycs\Entity\Collection\PostCollection $posts
     */
    public function setPosts(PostCollection $posts = null);

    /**
     * @param \Topycs\Entity\PostInterface $post
     */
    public function addPost(PostInterface $post);
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);
    
    /**
     * @return \Topycs\Entity\PostInterface
     */
    public function getHeadPost();

    /**
     * @return mixed
     */
    public function isPinned();

    /**
     * @param bool $bool
     * @throws \InvalidArgumentException
     */
    public function setPinned($bool = true);
}
