<?php

namespace spec\Topycs\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThreadSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Entity\Thread');
    }
    
    function it_initializes_with_empty_post_collection()
    {
        $this->getPosts()->shouldBeAnInstanceOf('Topycs\Entity\Collection\PostCollection');
        $this->getPosts()->count()->shouldBe(0);
    }
}
