<?php
namespace fully\core\base\gateway;

interface ReadGatewayInterface
{
  public function find($id);
  public function findAll();
  public function findBy(array $criteria, $orderBy = null, $limit = null,$offset = null);
  public function findOneBy(array $criteria);
}