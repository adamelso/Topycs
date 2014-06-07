<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Topycs\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Builder\PostBuilderInterface;
use Topycs\Entity\PostInterface;
use Topycs\Entity\ThreadInterface;

class ThreadBuilderSpec extends ObjectBehavior
{
    function let(PostBuilderInterface $postBuilder, PostInterface $post)
    {
        $this->beConstructedWith($postBuilder);

        $postBuilder->buildPost('content')->willReturn($post);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Builder\ThreadBuilder');
    }
    
    function it_builds_a_thread(PostBuilderInterface $postBuilder, PostInterface $post)
    {
        $postBuilder->buildPost('content')->shouldBeCalled()->willReturn($post);
        
        $thread = $this->buildThread('title', 'content');
        
        $thread->shouldImplement('Topycs\Entity\ThreadInterface');
        $thread->getTitle()->shouldBe('title');
        $thread->getHeadPost()->shouldBe($post);
    }
}
