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
use Topycs\Entity\Collection\ThreadCollection;

/**
 * A basic category.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category implements CategoryInterface
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
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $description;

    /**
     * @var \Topycs\Entity\Collection\ThreadCollection
     * 
     * @ORM\OneToMany(targetEntity="\Topycs\Entity\Thread", mappedBy="thread")
     */
    protected $threads;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        if (!is_string($name)) {
            throw new \InvalidArgumentException(
                sprintf('Expected string, got %s', gettype($name))
            );
        }
        
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription($description)
    {
        if (!is_string($description)) {
            throw new \InvalidArgumentException(
                sprintf('Expected string, got %s', gettype($description))
            );
        }

        $this->description = $description;
    }

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
}
