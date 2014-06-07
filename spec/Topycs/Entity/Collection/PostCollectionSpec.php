<?php

/*
 * This file is part of the Topycs package.
 *
 * (c) Daniel Ribeiro <drgomesp@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
    
    function it_does_not_add_non_post(\stdClass $item)
    {
        $this->shouldThrow('\InvalidArgumentException')->duringAdd($item);
    }
    
    function it_does_add_post(PostInterface $post)
    {
        $this->add($post);
        $this->get(0)->shouldBe($post);
    }
}
