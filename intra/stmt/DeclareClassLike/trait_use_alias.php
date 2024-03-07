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
    use Greeting {
        sayHello as public greet;
        sayGoodbye as public bidFarewell;
    }
}

$obj = new MyClass();

$obj->greet(); 
$obj->bidFarewell(); 

?>