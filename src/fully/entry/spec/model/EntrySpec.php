<?php

namespace spec\fully\entry\model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use fully\entry\model\EntryInterface;
use fully\base\model\TimestampableInterface;
use fully\base\model\ToggleableInterface;
use fully\base\model\SluggableInterface;

class EntrySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('fully\entry\model\Entry');
    }

    public function it_should_implement_entry_interface()
    {
      $this->shouldImplement(EntryInterface::class);
    }

    public function it_implements_timestampable()
    {
      $this->shouldImplement(TimestampableInterface::class);
    }

    public function it_implements_sluggable()
    {
      $this->shouldImplement(SluggableInterface::class);
    }

    public function it_has_no_identifier_by_default()
    {
      $this->getId()->shouldReturn(null);
    }

    public function it_is_toggleable()
    {
      $this->shouldImplement(ToggleableInterface::class);
    }

    public function it_is_enabled_by_default()
    {
      $this->shouldBeEnabled();
    }

    public function its_title_can_be_updated()
    {
      $this->setTitle('Fake title');
      $this->getTitle()->shouldReturn('Fake title');
    }

    public function its_created_at_and_published_on__are_equal_by_default()
    {
      $this->getPublishedOn()->shouldBeLike($this->getCreatedAt());
    }

    public function its_published_on_is_mutable(\DateTime $dateTime)
    {
      $this->setPublishedOn($dateTime);
      $this->getPublishedOn()->shouldReturn($dateTime);
    }

    public function its_has_no_slug_by_default()
    {
      $this->getSlug()->shouldReturn(null);
    }
}
