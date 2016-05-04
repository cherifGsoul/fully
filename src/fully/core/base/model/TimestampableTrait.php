<?php
namespace fully\core\base\model;

trait TimestampableTrait
{
  protected $createdAt;
  protected $updatedAt;

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function setCreatedAt(\Datetime $createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function getUpdatedAt()
  {
    return $this->updatedAt;
  }

  public function setUpdatedAt(\Datetime $updatedAt)
  {
    $this->updatedAt = $updatedAt;
  }
}