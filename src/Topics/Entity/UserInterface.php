<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Entity;

use Topics\Entity\Collection\PostCollection;
use Topics\Entity\Collection\ThreadCollection;

/**
 * Defines a User.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Entity
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
     * @return \Topics\Entity\Collection\ThreadCollection
     */
    public function getThreads();

    /**
     * @param \Topics\Entity\Collection\ThreadCollection $threads
     */
    public function setThreads(ThreadCollection $threads);

    /**
     * @param \Topics\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread);

    /**
     * @return \Topics\Entity\Collection\PostCollection
     */
    public function getPosts();

    /**
     * @param \Topics\Entity\Collection\PostCollection $posts
     */
    public function setPosts(PostCollection $posts);

    /**
     * @param \Topics\Entity\PostInterface $post
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
