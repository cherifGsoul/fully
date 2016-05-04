<?php
namespace fully\core\base\collection;

trait HashableTrait
{
  public function hash($subject)
  {
    if (is_object($subject)) {
      return spl_object_hash($subject);
    }
  }
}