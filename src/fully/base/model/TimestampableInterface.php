<?php
namespace fully\base\model;

interface TimestampableInterface {
  public function getCreatedAt();
  public function getUpdatedAt();
  public function setCreatedAt(\DateTime $createdAt);
  public function setUpdatedAt(\DateTime $updatedAt);
}
