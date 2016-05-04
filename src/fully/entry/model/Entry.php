<?php

namespace fully\entry\model;
use fully\base\model\TimestampableTrait;
use fully\base\model\ToggleableTrait;
use fully\base\model\SluggableTrait;
use fully\field\model\FieldInterface;

class Entry implements EntryInterface
{
  use TimestampableTrait, ToggleableTrait, SluggableTrait;

  protected $id;
  protected $title;
  protected $publishedOn;
  protected $fields;
  protected $relations;


  public function __construct()
  {
    $this->publishedOn = new \DateTime();
    $this->createdAt = new \DateTime();
    $this->fields = new \SplObjectStorage();
    $this->relations = new \SplObjectStorage();
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

  public function getFields()
  {
    return $this->fields;
  }

  public function setFields(\SplObjectStorage $fields)
  {
    foreach($fields as $field) {
      $this->addField($field);
    }
  }

  public function addField(FieldInterface $field)
  {
    $this->fields->attach($field);
  }

  public function hasField(FieldInterface $field)
  {
    return $this->fields->contains($field);
  }
}
