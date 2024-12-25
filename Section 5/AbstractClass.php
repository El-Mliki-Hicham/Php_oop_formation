<?php

declare(strict_types=1);

abstract class Person{

    abstract function setName(string $name):void;
    abstract function getName():void;

}

class Prof extends Person{

    private string $name ;


    public function setName(string $name):void {

         $this->name = $name;
    }
    
    public function getName():void{
        echo  $this->name ;
    }
    
}

$prof = new Prof;
$prof->setName("hicham");
$prof->getName();



?>