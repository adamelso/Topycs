<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Topycs\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use Topycs\Repository\ThreadRepository;

class ThreadControllerSpec extends ObjectBehavior
{
    function let(EngineInterface $templating, ThreadRepository $threadRepository)
    {
        $this->beConstructedWith($templating, $threadRepository);
    }
    
    function it_has_action_that_lists_by_category(
        EngineInterface $templating,
        ThreadRepository $threadRepository,
        Response $response
    ) {
        $threadRepository->findByCategory()->shouldBeCalled()->willReturn([]);
        
        $templating->renderResponse('@TopycsWeb/Thread/listByCategory.html.twig', [
            'threads' => [],
        ])->shouldBeCalled()->willReturn($response);
        
        $response = $this->listByCategoryAction();

        $response->shouldBeAnInstanceOf('Symfony\Component\HttpFoundation\Response');
    }
}