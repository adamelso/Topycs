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
final class CategoryController
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
     * @param \Topycs\Entity\CategoryInterface $category
     * @return \Symfony\Component\HttpFoundation\Response
     * 
     * @ParamConverter("category", class="Entity:Category")
     */
    public function listThreads(CategoryInterface $category)
    {
        return $this->templating->renderResponse('@TopycsWeb/Category/listThreads.html.twig', [
            'category' => $category,
        ]);
    }
}
