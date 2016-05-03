<?php
namespace fully\base\model;

interface SluggableInterface
{
  public function setSlug($slug = null);
  public function getSlug();
}
