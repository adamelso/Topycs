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

use Topycs\Discussions\Entity\Collection\PostCollection;
use Topycs\Discussions\Entity\Collection\PostCollectionInterface;

/**
 * A basic thread, which is basically a set of posts with a head post and a title.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
 */
class Thread implements ThreadInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var \Topycs\Discussions\Entity\CategoryInterface
     */
    protected $category;
    
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
     * @var bool
     */
    protected $isPinned;

    /**
     * @var \Topycs\Discussions\Entity\UserInterface
     */
    protected $author;

    public function __construct()
    {
        $this->posts = new PostCollection();
    }
    
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeadPost()
    {
        return $this->posts->get(0);
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
    public function setPinned($isPinned = true)
    {
        if (!is_bool($isPinned)) {
            throw new \InvalidArgumentException(
                sprintf('Expected boolean, got %s.', gettype($isPinned))
            );
        }
        
        $this->isPinned = $isPinned;
    }

    /**
     * {@inheritdoc}
     */
    public function isPinned()
    {
        return $this->isPinned;
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
    public function setPosts(PostCollectionInterface $posts = null)
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
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($title)
    {
        if (!is_string($title)) {
            throw new \InvalidArgumentException(
                sprintf('Expected string, got %s.', gettype($title))
            );
        }
        
        $this->title = $title;
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
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }
}
