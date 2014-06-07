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

    function it_does_not_add_non_thread(\stdClass $item)
    {
        $this->shouldThrow('\InvalidArgumentException')->duringAdd($item);
    }
    
    function it_does_add_thread(ThreadInterface $thread)
    {
        $this->add($thread);
        $this->get(0)->shouldBe($thread);
    }
}
