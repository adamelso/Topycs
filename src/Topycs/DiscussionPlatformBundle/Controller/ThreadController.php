<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Topycs\DiscussionPlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Topycs\Discussions\Entity\CategoryInterface;

/**
 * Class ThreadController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Controller
 */
final class ThreadController extends Controller
{
    /**
     * @param \Topycs\Discussions\Entity\CategoryInterface $category
     * @return mixed
     */
    public function listByCategoryAction(CategoryInterface $category)
    {   
        $threads = $this->get('topycs.repository.thread')->findByCategory($category);
        
        return $this->render('@TopycsDiscussionPlatform/Thread/listByCategory.html.twig', [
            'category' => $category,
            'threads' => $threads,
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listLatestAction()
    {
        $threads = $this->get('topycs.repository.thread')->findLatest();

        return $this->render('@TopycsDiscussionPlatform/Thread/listLatest.html.twig', [
            'threads' => $threads,
        ]);
    }
}
