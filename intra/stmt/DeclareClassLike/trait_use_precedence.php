<?php

trait TraitA {
    public function sayHello() {
        echo "Hello from TraitA! ";
    }
}

trait TraitB {
    public function sayHello() {
        echo "Hello from TraitB! ";
    }
}

class MyClass {
    use TraitA, TraitB {
        TraitA::sayHello insteadof TraitB; 
        TraitB::sayHello as sayHelloB; 
    }
}

$obj = new MyClass();

$obj->sayHello();  
$obj->sayHelloB();  

?>