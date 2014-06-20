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

use Topycs\Entity\CategoryInterface;
use Topycs\Repository\ThreadRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

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
     * @var \Topycs\Repository\ThreadRepositoryInterface
     */
    protected $threadRepository;

    /**
     * @param \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface $templating
     * @param \Topycs\Repository\ThreadRepositoryInterface $threadRepository
     */
    public function __construct(EngineInterface $templating, ThreadRepositoryInterface $threadRepository)
    {
        $this->templating = $templating;
        $this->threadRepository = $threadRepository;
    }

    /**
     * @param \Topycs\Entity\CategoryInterface $category
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listByCategoryAction(CategoryInterface $category)
    {   
        $threads = $this->threadRepository->findByCategory($category);
        
        return $this->templating->renderResponse('@TopycsWeb/Thread/listByCategory.html.twig', [
            'category' => $category,
            'threads' => $threads,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listLatestAction()
    {
        $threads = $this->threadRepository->findLatest();

        return $this->templating->renderResponse('@TopycsWeb/Thread/listLatest.html.twig', [
            'threads' => $threads,
        ]);
    }
}
