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

use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

/**
 * Class IndexController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Controller
 */
final class IndexController
{
    /**
     * @var \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface
     */
    protected $templating;

    /**
     * @param \Symfony\Bundle\FrameworkBundle\Templating\EngineInterface $templating
     */
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {   
        return $this->templating->renderResponse('@TopycsWeb/Index/index.html.twig', [
            
        ]);
    }
}
