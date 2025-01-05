<?php

class Person
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}


$bob = new Person('Bob');

// clone an object
$alex = clone $bob;
$alex->name = 'Alex';

// show both objects
var_dump($bob);
var_dump($alex);



?>