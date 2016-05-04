<?php

namespace fully\core\entry\model;
use fully\core\base\model\TimestampableTrait;
use fully\core\base\model\ToggleableTrait;
use fully\core\base\model\SluggableTrait;
use fully\core\field\model\FieldInterface;

class Entry implements EntryInterface
{
  use TimestampableTrait, ToggleableTrait, SluggableTrait;

  protected $id;
  protected $title;
  protected $parent;
  protected $publishedOn;
  protected $fields;
  protected $associations;


  public function __construct()
  {
    $this->publishedOn = new \DateTime();
    $this->createdAt = new \DateTime();
    $this->fields = new \ArrayObject();
    $this->associations = new \ArrayObject();
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

  public function setFields(\ArrayObject $fields)
  {
    foreach($fields as $field) {
      $this->addField($field);
    }
  }

  public function addField(FieldInterface $field)
  {
    $this->fields->append($field);
  }

  public function hasField(FieldInterface $field)
  {
    return $this->fields->offsetExists($field);
  }

  public function setParent(EntryInterface $parent)
  {
    $this->parent = $parent;
  }

  public function getParent()
  {
    return $this->parent;
  }
}
