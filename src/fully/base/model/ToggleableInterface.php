<?php
namespace fully\base\model;

interface ToggleableInterface
{
  public function enable();
  public function disable();
  public function isEnabled();
  public function setEnabled($enabled);
  public function getEnabled();
}
