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

/**
 * Class IndexController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Controller
 */
final class IndexController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {   
        return $this->render('@TopycsDiscussionPlatform/Default/index.html.twig', [
            
        ]);
    }
    
    public function latestAction()
    {
        return $this->render('@TopycsDiscussionPlatform/Index/latest.html.twig', [
            
        ]);
    }
}
