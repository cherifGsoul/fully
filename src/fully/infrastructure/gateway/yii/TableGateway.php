<?php
namespace fully\infrastructure\gateway\yii;
use fully\core\base\gateway\GatewayInterface;
use yii\db\Query;

abstract class TableGateway implements GatewayInterface
{

  abstract public function createQuery();
  
  public function findAll()
  {
    return $this->createQuery()->all();
  }

  public function find($id)
  {
    return $this->createQuery()->andWhere(['id'=>$id]);
  }

  public function findBy(array $criteria, $orderBy = null, $limit = null,$offset = null)
  {
    $query = $this->createQuery();

    if (!empty($criteria)) {
      $query->andWhere($criteria);
    }
    
    if (!empty($order)) {
      $query->orderBy($order);
    }

    if (!empty($limit)) {
      $query->limit($limit);
    }

    if (!empty($offset)) {
      $query->offset($offset);
    }

    return $query->all();
  }

  public function findOneBy(array $criteria)
  {
    if(empty($criteria)) {
      throw new \Exception('Criteria must be set');
    }

    return $this->createQuery()
                ->andWhere($criteria)
                ->one();
  }
}