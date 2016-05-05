<?php
namespace fully\modules\web\tests\unit\fixtures;

class FakeUser
{
  protected $password;
  protected $security;

  public function __construct($security)
  {
    $this->security = $security;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->password = $this->security->generatePasswordHash($password);
  }
}