<?php

namespace spec\fully\core\base\collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use IteratorAggregate;

class HashMapSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('fully\core\base\collection\HashMap');
    }

    public function it_implements_array_access()
    {
      $this->shouldImplement(\ArrayAccess::class);
    }

    public function it_implements_countable()
    {
      $this->shouldImplement(\Countable::class);
    }

    public function it_is_countable()
    {
      $this->shouldHaveCount(0);
    }

    public function it_implements_iterator_aggregate()
    {
      $this->shouldImplement(IteratorAggregate::class);
    }
}
