<?php

namespace spec\fully\core\base\factory;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use fully\core\base\factory\FactoryInterface;
use spec\fully\core\base\fixtures\FakeObject;

class FactorySpec extends ObjectBehavior
{
	public function let()
	{
	 $this->beConstructedWith(FakeObject::class);
	}

  public function it_is_initializable()
  {
  	$this->shouldHaveType('fully\core\base\factory\Factory');
  }

  public function it_implements_factory_interface()
  {
  	$this->shouldImplement(FactoryInterface::class);
  }

  public function it_create_instance_of_object()
  {
    $this->createNew()->shouldReturnAnInstanceOf(FakeObject::class);
  }
}
