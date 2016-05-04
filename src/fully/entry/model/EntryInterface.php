<?php
namespace fully\entry\model;

use fully\base\model\TimestampableInterface;
use fully\base\model\ToggleableInterface;
use fully\base\model\SluggableInterface;
use fully\base\model\AssociableInterface;

interface EntryInterface extends
      TimestampableInterface,
      ToggleableInterface,
      SluggableInterface,
      AssociableInterface
{

}