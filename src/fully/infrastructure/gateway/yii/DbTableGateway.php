<?php
namespace fully\infrastructure\gateway\yii;
use fully\core\base\gateway\GatewayInterface;
use yii\db\Query;

class DbTableGateway extends TableGateway
{
  protected $table;
  
  public function __construct($table)
  {
    $this->table = $table;
  }

  public function createQuery()
  {
    return (new Query())->from([$this->table]);
  }
}