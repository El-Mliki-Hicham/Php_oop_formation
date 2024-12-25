<?php

declare(strict_types=1);

class Brand{

    protected string $name;
    protected string $color;

     
    public function __construct(string $name) 
    {
        $this->name = $name ;
    }

    public function setColor(string $color): void{
        $this->color = $color ;
    }

    public function getName():string{
        return $this->name ;
    }
    public function getColor():string{
        return $this->color ;
    }

}


class Car extends Brand{
    private string $carName;
    
    public function __construct(string $brandName ,string $carName)
    {
        parent::__construct($brandName);
        $this->carName  = $carName;
    }

    public function getCarName():string{
        return $this->carName;
    }

    public function getCarInfo() : void{ 
        echo "Car brand : ".$this->getName()."\n";
        echo "Car color : ".$this->getColor()."\n";
        echo "Car Name : ".$this->getCarName()."\n";
    }
}

$car = new Car("dacia","logan") ; 
$car->setColor('red');
$car->getCarInfo();




?>