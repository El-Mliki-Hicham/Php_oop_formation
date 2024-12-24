<?php

declare(strict_types=1);

class Brand{

    protected string $name;
    protected string $color;

    public function setName(string $name) : void{
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
    
    public function setCarName(string $name): void{
        $this->carName  = $name;
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

$car = new Car ; 
$car->setName('dacia');
$car->setColor('red');
$car->setCarName('logan');
$car->getCarInfo();




?>