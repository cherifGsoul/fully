<?php
namespace fully\infrastructure\gateway\yii;

class ActiveGateway extends TableGateway
{
  protected $modelClassName;
  
  public function __construct($modelClassName)
  {
    $this->modelClassName = $modelClassName;
  }

  public function createQuery()
  {
    return $this->modelClassName::find()->asArray();
  }
}