<?php

namespace fully\entry\model;
use fully\base\model\TimestampableTrait;
use fully\base\model\ToggleableTrait;
use fully\base\model\SluggableTrait;

class Entry implements EntryInterface
{
  use TimestampableTrait, ToggleableTrait, SluggableTrait;

  protected $id;
  protected $title;
  protected $publishedOn;


  public function __construct()
  {
    $this->publishedOn = new \DateTime();
    $this->createdAt = new \DateTime();
  }

  public function __toString()
  {
    return $this->title;
  }
  
  public function getId()
  {
    return $this->id;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getPublishedOn()
  {
    return $this->publishedOn;
  }

  public function setPublishedOn(\DateTime $publishedOn)
  {
    $this->publishedOn = $publishedOn;
  }
}
