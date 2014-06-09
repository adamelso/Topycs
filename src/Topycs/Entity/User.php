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

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Topycs\Entity\Collection\PostCollection;
use Topycs\Entity\Collection\ThreadCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class User
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 *
 * @ORM\Entity(repositoryClass="\Topycs\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User extends BaseUser implements UserInterface
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
     * @var \Topycs\Entity\Collection\PostCollection
     *
     * @ORM\OneToMany(targetEntity="\Topycs\Entity\Post", mappedBy="thread")
     */
    protected $posts;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;
    
    /**
     * @var \Topycs\Entity\Collection\ThreadCollection
     * 
     * @ORM\OneToMany(targetEntity="\Topycs\Entity\Thread", mappedBy="author")
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
    public function setThreads(ThreadCollection $threads)
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
    public function setPosts(PostCollection $posts)
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
