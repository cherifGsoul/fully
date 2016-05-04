<?php
namespace fully\core\entry\model;

use fully\core\base\model\TimestampableInterface;
use fully\core\base\model\ToggleableInterface;
use fully\core\base\model\SluggableInterface;
use fully\core\base\model\AssociableInterface;

interface EntryInterface extends
      TimestampableInterface,
      ToggleableInterface,
      SluggableInterface,
      AssociableInterface
{

}