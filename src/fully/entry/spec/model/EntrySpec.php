<?php

namespace spec\fully\entry\model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use fully\entry\model\EntryInterface;

class EntrySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('fully\entry\model\Entry');
    }

    public function it_should_implement_entry_interface()
    {
      $this->shouldImplement(EntryInterface::class);
    }
}
