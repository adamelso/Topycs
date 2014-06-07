<?php

namespace spec\Topycs\Builder;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Entity\Post;

class PostBuilderSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Builder\PostBuilder');
    }
    
    function it_builds_a_post()
    {
        $this->buildPost('content')->shouldImplement('Topycs\Entity\PostInterface');
    }
}
