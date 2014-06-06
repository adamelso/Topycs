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

/**
 * Defines a Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Entity
 */
interface PostInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return \Topycs\Entity\UserInterface
     */
    public function getAuthor();

    /**
     * @param \Topycs\Entity\UserInterface $author
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
     * @return \Topycs\Entity\ThreadInterface
     */
    public function getThread();

    /**
     * @param \Topycs\Entity\ThreadInterface $thread
     */
    public function setThread(ThreadInterface $thread);
}
