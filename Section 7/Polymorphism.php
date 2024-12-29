<?php

declare(strict_types=1);


interface Person {

    function name():string ;

}

class Client implements Person{

    function name():string {
        return "hicham";
    }
}

class Student implements Person{

    function name():string {
        return "Amine";
    }
}

$client = new Client();
echo $client->name();




?>