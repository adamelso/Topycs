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

/**
 * A basic post, which has an author and some content.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="posts")
 */
class Post implements PostInterface
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
     * @var \Topycs\Entity\ThreadInterface
     * 
     * @ORM\ManyToOne(targetEntity="\Topycs\Entity\Thread")
     */
    protected $thread;
    
    /**
     * @var \Topycs\Entity\UserInterface
     */
    protected $author;

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
     * @var string
     * 
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Topycs\Entity\UserInterface
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \Topycs\Entity\UserInterface $author
     */
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        if (!is_string($content)) {
            throw new \InvalidArgumentException(
                sprintf('Expected string, got %s', gettype($content))
            );
        }
        
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \Topycs\Entity\ThreadInterface
     */
    public function getThread()
    {
        return $this->thread;
    }

    /**
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function setThread(ThreadInterface $thread)
    {
        $this->thread = $thread;
    }
}
