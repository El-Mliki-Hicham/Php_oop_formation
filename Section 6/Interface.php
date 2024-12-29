<?php

declare(strict_types=1);


interface Person {

    function name():string ;

    function age():int ;

}

class Client implements Person{

    function name():string {
        return "hicham";
    }

    function age():int {
        return 23;
    }
}

$client = new Client();
echo $client->name();




?>