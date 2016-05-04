<?php
namespace fully\core\base\model;

interface TimestampableInterface {
  public function getCreatedAt();
  public function getUpdatedAt();
  public function setCreatedAt(\DateTime $createdAt);
  public function setUpdatedAt(\DateTime $updatedAt);
}
