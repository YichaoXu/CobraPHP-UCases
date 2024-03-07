<?php

trait Greeting {
    public function sayHello() {
        echo "Hello, ";
    }

    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

class MyClass {
    use Greeting;

    public function greet() {
        $this->sayHello();
        echo "World!";
    }
}

$obj = new MyClass();

$obj->sayHello();
$obj->sayGoodbye(); 
$obj->greet(); 

?>