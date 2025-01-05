<?php

function load_model($class_name)
{
    $path= 'models/' . $class_name . '.php';
    if(file_exists($path))
    {
        require $path;
    }

}	


spl_autoload_register('load_model');

?>