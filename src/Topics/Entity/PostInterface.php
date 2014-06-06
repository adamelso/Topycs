<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Entity;

/**
 * Defines a Post.
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Entity
 */
interface PostInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return \Topics\Entity\UserInterface
     */
    public function getAuthor();

    /**
     * @param \Topics\Entity\UserInterface $author
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
     * @return \Topics\Entity\ThreadInterface
     */
    public function getThread();

    /**
     * @param \Topics\Entity\ThreadInterface $thread
     */
    public function setThread(ThreadInterface $thread);
}
