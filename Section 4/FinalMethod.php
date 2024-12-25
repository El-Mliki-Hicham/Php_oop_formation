<?php

declare(strict_types=1);

class Brand{
    final public function id()
	{
		return uniqid();
	}

}


class Car extends Brand{
    
    public function id()
	{
		return uniqid('car-');
	}
}


$car = new Car ; 

$car->getCarInfo();




?>