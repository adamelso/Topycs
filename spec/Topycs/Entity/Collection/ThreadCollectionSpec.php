<?php

namespace spec\Topycs\Entity\Collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Entity\ThreadInterface;

class ThreadCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Entity\Collection\ThreadCollection');
    }

    function it_does_not_append_non_thread(\stdClass $item)
    {
        $this->shouldThrow('\InvalidArgumentException')->duringAppend($item);
    }
    
    function it_does_append_thread(ThreadInterface $thread)
    {
        $this->append($thread);
    }
}
