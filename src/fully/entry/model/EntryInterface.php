<?php
namespace fully\entry\model;

use fully\base\model\TimestampableInterface;
use fully\base\model\ToggleableInterface;
use fully\base\model\SluggableInterface;

interface EntryInterface extends
      TimestampableInterface,
      ToggleableInterface,
      SluggableInterface
{

}