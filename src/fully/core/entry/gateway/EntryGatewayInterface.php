<?php

namespace fully\core\entry\gateway;

use fully\core\base\gateway\GatewayInterface;

interface EntryGatewayInterface extends GatewayInterface
{
  public function findOneByTitle($title);
  public function findOneBySlug($slug);
}