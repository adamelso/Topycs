<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Topycs\Entity\Collection\PostCollection;
use Topycs\Entity\Collection\ThreadCollection;

/**
 * Class User
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @var
     */
    protected $threads;
    
    /**
     * @return \Topycs\Entity\Collection\ThreadCollection
     */
    public function getThreads()
    {
        // TODO: Implement getThreads() method.
    }

    /**
     * @param \Topycs\Entity\Collection\ThreadCollection $threads
     */
    public function setThreads(ThreadCollection $threads)
    {
        // TODO: Implement setThreads() method.
    }

    /**
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function addThread(ThreadInterface $thread)
    {
        // TODO: Implement addThread() method.
    }

    /**
     * @return \Topycs\Entity\Collection\PostCollection
     */
    public function getPosts()
    {
        // TODO: Implement getPosts() method.
    }

    /**
     * @param \Topycs\Entity\Collection\PostCollection $posts
     */
    public function setPosts(PostCollection $posts)
    {
        // TODO: Implement setPosts() method.
    }

    /**
     * @param \Topycs\Entity\PostInterface $post
     */
    public function addPost(PostInterface $post)
    {
        // TODO: Implement addPost() method.
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        // TODO: Implement getCreatedAt() method.
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        // TODO: Implement setCreatedAt() method.
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        // TODO: Implement getUpdatedAt() method.
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt = null)
    {
        // TODO: Implement setUpdatedAt() method.
    }
}
