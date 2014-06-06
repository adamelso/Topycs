<?php

namespace spec\Topycs\Entity\Collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Entity\PostInterface;

class PostCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Entity\Collection\PostCollection');
    }
    
    function it_does_not_append_non_post(\stdClass $item)
    {
        $this->shouldThrow('\InvalidArgumentException')->duringAppend($item);
    }
    
    function it_does_append_post(PostInterface $post)
    {
        $this->append($post);
    }
}
