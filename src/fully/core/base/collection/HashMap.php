<?php

namespace fully\core\base\collection;

use ArrayAccess;
use Countable;
use IteratorAggregate;
use HashMapIterator;

class HashMap implements ArrayAccess,Countable,IteratorAggregate
{
  use HashableTrait;
  protected $container = [];

  public function offsetExists($offset)
  {

  }

  public function offsetGet($offset)
  {

  }

  public function offsetSet($offset,$value)
  {

  }

  public function offsetUnset($offset)
  {

  }

  public function count()
  {
    return count($this->container);
  }

  public function getIterator()
  {
    return new HashMapIterator($this);
  }
}
