<?php

class Customer
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	protected function format()
	{
		return ucwords($this->name);
	}

	public function getName()
	{
		return $this->format($this->name);
	}
}


class VIP extends Customer
{
	protected function format()
	{
		return strtoupper($this->name);
	}
}

$vip = new VIP('hicham');
echo $vip->getName(); // HICHAM 

?>