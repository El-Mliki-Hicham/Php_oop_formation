<?php

// __construct() is a magic method that is called when an object is created.
class MyClass {
    public function __construct($name) {
        echo "Hello, $name!";
    }
}

$obj = new MyClass("Hicham");  // Output: Hello, Hicham!




// __destruct() is a magic method that is called when an object is destroyed.
class MyClass {
    public function __destruct() {
        echo "Object destroyed!";
    }
}

$obj = new MyClass();
unset($obj);  // Output: Object destroyed!




// __call() is a magic method that is called when an object tries to call a method that does not exist.

class MyClass {
    public function __call($name, $arguments) {
        echo "this method $name does not exist  with the arguments : $arguments[0] ... ";
    }

    public function existingMethod() {
        echo "Appel de la méthode existingMethod";
    }
}

$obj = new MyClass();
$obj->nonExistentMethod(1, 2, 3);  // Output: Appel de la méthode nonExistentMethod avec les arguments : 1, 2, 3




//__callStatic() is a magic method that is called when a static method is called that does not exist.

    class MyClass {
        public static function __callStatic($name, $arguments) {
            echo "this static method $name does not exist  with the arguments : $arguments[0] ... ";
        }

        public static function existingMethod() {
            echo "Appel de la méthode existingMethod";
        }
    }

    MyClass::nonExistentMethod(1, 2, 3);  // Output: Appel de la méthode nonExistentMethod avec les arguments : 1, 2, 3




// __get() is a magic method that is called when an object tries to access a property that does not exist.
    class MyClass {
        private $data = "data";
        public $myName  = "hicham";
        public function __get($name) {
            return  "The property $name does not exist";
        }
    }
    
    $obj = new MyClass();
    echo $obj->data;  //The property $data does not exist




// __set() is a magic method that is called when an object tries to set a property that does not exist.
    class MyClass {
        private  $data;
    
        public function __set($name, $value) {
            $this->$name = " this property $name does not exist but it has been created , and its value is $value";
        }
    }
    
    $obj = new MyClass();
    $obj->name = 'Hicham';
    echo $obj->name;  // Output: Hicham


    // __toString() is a magic method that is called when an object is converted to a string.

?>
