<?php

namespace spec\fully\core\base\factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use fully\core\base\factory\FactoryInterface;

class FactorySpec extends ObjectBehavior
{
		public function let()
		{
			$this->beConstructedWith('spec\fully\core\base\FakeObject');
		}
  public function it_is_initializable()
  {
  	$this->shouldHaveType('fully\core\base\factory\Factory');
  }

  public function it_implements_factory_interface()
  {
  	$this->shouldImplement(FactoryInterface::class);
  }
}
