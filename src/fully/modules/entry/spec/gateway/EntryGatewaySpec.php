<?php

namespace spec\fully\modules\entry\gateway;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EntryGatewaySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('fully\modules\entry\gateway\EntryGateway');
    }

    public function it_implements_base_gateway_interface()
    {
      $this->shouldImplement('fully\core\base\gateway\GatewayInterface');
    }
}
