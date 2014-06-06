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

use Doctrine\ORM\Mapping as ORM;
use Topycs\Entity\Collection\PostCollection;

/**
 * A basic thread, which is basically a set of posts with a head post and a title.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 * 
 * @ORM\Entity(repositoryClass="\Topycs\Repository\ThreadRepository")
 * @ORM\Table(name="threads")
 */
class Thread implements ThreadInterface
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $title;

    /**
     * @var \Topycs\Entity\Collection\PostCollection
     * 
     * @ORM\OneToMany(targetEntity="\Topycs\Entity\Post", mappedBy="thread")
     */
    protected $posts;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;

    /**
     * @var bool
     * 
     * @ORM\Column(type="boolean", name="is_pinned")
     */
    protected $isPinned;

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
        return $this->posts->offsetGet(0);
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
    public function setPosts(PostCollection $posts = null)
    {
        $this->posts = $posts;
    }

    /**
     * {@inheritdoc}
     */
    public function addPost(PostInterface $post)
    {
        $this->posts->append($post);
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
}
