<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Topycs\Discussions\Entity\Collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Topycs\Entity\PostInterface;

class PostCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Topycs\Discussions\Entity\Collection\PostCollection');
    }
}
