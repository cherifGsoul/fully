<?php

namespace spec\fully\attribute\model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AttributeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('fully\attribute\model\Attribute');
    }
}
