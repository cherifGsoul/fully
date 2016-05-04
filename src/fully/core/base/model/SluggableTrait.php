<?php
namespace fully\core\base\model;

trait SluggableTrait
{
  protected $slug;
  
  public function setSlug($slug = null)
  {
    $this->slug = $slug;
  }
  public function getSlug()
  {
    return $this->slug;
  }
}
