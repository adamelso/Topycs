<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Discussions\Entity;

use Topycs\Discussions\Entity\Collection\PostCollectionInterface;

/**
 * Defines a Thread.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
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
     * @return \Topycs\Discussions\Entity\Collection\PostCollectionInterface
     */
    public function getPosts();

    /**
     * @param \Topycs\Discussions\Entity\Collection\PostCollectionInterface $posts
     */
    public function setPosts(PostCollectionInterface $posts = null);

    /**
     * @param \Topycs\Discussions\Entity\PostInterface $post
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
     * @return \Topycs\Discussions\Entity\PostInterface
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

    /**
     * @return \Topycs\Discussions\Entity\UserInterface
     */
    public function getAuthor();

    /**
     * @param \Topycs\Discussions\Entity\UserInterface $author
     */
    public function setAuthor(UserInterface $author);
}
