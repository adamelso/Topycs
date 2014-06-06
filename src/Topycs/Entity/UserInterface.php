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
use Topycs\Entity\Collection\ThreadCollection;

/**
 * Defines a User.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
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
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function getThreads();

    /**
     * @param \Topycs\Entity\Collection\ThreadCollection $threads
     */
    public function setThreads(ThreadCollection $threads);

    /**
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread);

    /**
     * @return \Topycs\Entity\Collection\PostCollection
     */
    public function getPosts();

    /**
     * @param \Topycs\Entity\Collection\PostCollection $posts
     */
    public function setPosts(PostCollection $posts);

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
    public function setUpdatedAt($updatedAt = null);
}
