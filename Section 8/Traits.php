<?php

declare(strict_types=1);

trait Logger{

    public function log($message){
        echo $message;
    }

}

class User {
    use Logger;
}

class Product {
    use Logger;   
}


$user = new User;
$user->log('user created');



?>