<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\Controller;

use Topycs\Repository\ThreadRepository;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * Class ThreadController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Controller
 */
final class ThreadController
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface
     */
    protected $templating;

    /**
     * @var \Topycs\Repository\ThreadRepository
     */
    protected $threadRepository;

    /**
     * @param \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface $templating
     * @param \Topycs\Repository\ThreadRepository $threadRepository
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
        
        return $this->templating->renderResponse('@TopycsWeb/Thread/listByCategory.html.twig', [
            'threads' => $threads,
        ]);
    }
}
