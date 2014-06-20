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

/**
 * Defines a Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Discussions\Entity
 */
interface PostInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return \Topycs\Discussions\Entity\UserInterface
     */
    public function getAuthor();

    /**
     * @param \Topycs\Discussions\Entity\UserInterface $author
     */
    public function setAuthor(UserInterface $author);

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
    public function setUpdatedAt(\DateTime $updatedAt = null);
    
    /**
     * @return string
     */
    public function getContent();

    /**
     * @param string $content
     * @throws \InvalidArgumentException
     */
    public function setContent($content);

    /**
     * @return \Topycs\Discussions\Entity\ThreadInterface
     */
    public function getThread();

    /**
     * @param \Topycs\Discussions\Entity\ThreadInterface $thread
     */
    public function setThread(ThreadInterface $thread);
}
