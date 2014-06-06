<?php

namespace spec\Topycs\Entity\Collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThreadCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Entity\Collection\ThreadCollection');
    }

    function it_validates_item_type_on_append(\stdClass $item)
    {
        $this->shouldThrow('\InvalidArgumentException')->duringAppend($item);
    }
}
