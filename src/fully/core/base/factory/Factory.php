<?php

namespace fully\core\base\factory;

class Factory implements FactoryInterface
{
	protected $className;
	
	public function __construct($className)
	{
		$this->className = $className;
	}

	public function create()
	{
		return new $this->className;
	}
}
