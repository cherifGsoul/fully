<?php
namespace fully\base\model;

trait ToggleableTrait
{
  protected $enabled = true;

  public function isEnabled()
  {
    return $this->enabled;
  }

  public function setEnabled($enabled)
  {
    $this->enabled = (bool) $enbaled;
  }

  public function getEnabled()
  {
    return $this->enabled;
  }

  public function enable()
  {
    $this->enabled = true;
  }

  public function disable()
  {
    $this->enabled = false;
  }
}