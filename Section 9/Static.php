<?php

declare(strict_types=1);


class App{

    private static $app = null ;

    private function __construct()
    {
        
    }

    public static function get() : App{

        if(!self::$app){
            self::$app = new App;
        }

        return self::$app;

    }

    public function bootstrap():void{
        echo " start app";
    }
}


$app = App::get();
$app->bootstrap();


?>