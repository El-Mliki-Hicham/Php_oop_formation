<?php

class Customer{

    private $name;
    private $age;
    
    public function getName(){
        return $this->name ;
    }
    public function setName($name){
        return $this->name =$name ;
    }
    public function getAge(){
        return $this->age ;
    }
}

$customer = new Customer();
$customer->setName("Hicham");
// $customer->age = 23;

echo($customer->getName());

?>