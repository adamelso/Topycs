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
use Topycs\Discussions\Entity\Collection\ThreadCollectionInterface;

/**
 * Defines a User.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
 */
interface UserInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     */
    public function setEmail($email);
    
    /**
     * @return \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    public function getThreads();

    /**
     * @param \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface $threads
     */
    public function setThreads(ThreadCollectionInterface $threads);

    /**
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread);

    /**
     * @return \Topycs\Discussions\Entity\Collection\PostCollectionInterface
     */
    public function getPosts();

    /**
     * @param \Topycs\Discussions\Entity\Collection\PostCollectionInterface $posts
     */
    public function setPosts(PostCollectionInterface $posts);

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
    public function setUpdatedAt($updatedAt = null);
}
