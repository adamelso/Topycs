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

use FOS\UserBundle\Model\User as BaseUser;
use Topycs\Discussions\Entity\Collection\PostCollectionInterface;
use Topycs\Discussions\Entity\Collection\ThreadCollectionInterface;

/**
 * Class User
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
 */
class User extends BaseUser implements UserInterface
{
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var \Topycs\Discussions\Entity\Collection\PostCollectionInterface
     */
    protected $posts;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;
    
    /**
     * @var \Topycs\Discussions\Entity\Collection\ThreadCollectionInterface
     */
    protected $threads;
    
    /**
     * {@inheritdoc}
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * {@inheritdoc}
     */
    public function setThreads(ThreadCollectionInterface $threads)
    {
        $this->threads = $threads;
    }

    /**
     * {@inheritdoc}
     */
    public function addThread(ThreadInterface $thread)
    {
        $this->threads->add($thread);
    }

    /**
     * {@inheritdoc}
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * {@inheritdoc}
     */
    public function setPosts(PostCollectionInterface $posts)
    {
        $this->posts = $posts;
    }

    /**
     * {@inheritdoc}
     */
    public function addPost(PostInterface $post)
    {
        $this->posts->add($post);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }
}
