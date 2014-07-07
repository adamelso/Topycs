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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Topycs\Discussions\Entity\CategoryInterface;

/**
 * Class ThreadController
 *
 * @author Daniel Ribeiro <drgomesp@gmail.com>
 * @package Topycs\Controller
 */
final class CategoryController extends Controller
{
    /**
     * @param \Topycs\Entity\CategoryInterface $category
     * @return \Symfony\Component\HttpFoundation\Response
     * 
     * @ParamConverter("category", class="Entity:Category")
     */
    public function listThreads(CategoryInterface $category)
    {
        return $this->render('@TopycsWeb/Category/listThreads.html.twig', [
            'category' => $category,
        ]);
    }
}
