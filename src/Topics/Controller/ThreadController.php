<?php

/*
 * This file is part of the discussion-Topics package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topics\Controller;

use Doctrine\Common\Persistence\ObjectRepository;
use Topics\Repository\ThreadRepository;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * Class ThreadController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topics\Controller
 */
final class ThreadController
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface
     */
    protected $templating;

    /**
     * @var \Topics\Repository\ThreadRepository
     */
    protected $threadRepository;

    /**
     * @param \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface $templating
     * @param \Topics\Repository\ThreadRepository $threadRepository
     */
    public function __construct(EngineInterface $templating, ThreadRepository $threadRepository)
    {
        $this->templating = $templating;
        $this->threadRepository = $threadRepository;
    }

    /**
     * @return string
     */
    public function listByCategoryAction()
    {   
        $threads = $this->threadRepository->findByCategory();
        
        return $this->templating->renderResponse('::Thread/listByCategory.html.twig', [
            'threads' => $threads,
        ]);
    }
}
