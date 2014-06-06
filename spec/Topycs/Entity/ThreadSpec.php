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
}
