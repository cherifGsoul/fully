<?php

namespace spec\fully\core\entry\model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use fully\core\entry\model\EntryInterface;
use fully\core\base\model\TimestampableInterface;
use fully\core\base\model\ToggleableInterface;
use fully\core\base\model\SluggableInterface;
use fully\core\base\model\AssociableInterface;
use fully\core\field\model\FieldInterface;
use fully\core\entry\model\Entry;

class EntrySpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('fully\core\entry\model\Entry');
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

    public function it_implements_associable()
    {
      $this->shouldImplement(AssociableInterface::class);
    }

    public function it_has_spl_object_storage_by_default()
    {
      $this->getFields()->shouldHaveType('\ArrayAccess');
    }

    public function its_parent_is_mutable(EntryInterface $entry)
    {
      $this->setParent($entry);
      $this->getParent()->shouldReturn($entry);
    }
}
