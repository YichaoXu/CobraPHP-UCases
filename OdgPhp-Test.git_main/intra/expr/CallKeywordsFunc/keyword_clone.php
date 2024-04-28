<?php

function targetA() { echo "TARGET A" ;}
function targetB() { echo "TARGET B" ;}
class MyClass {
    public $property;
    function call() { ($this -> property)(); }
}

$original = new MyClass();
$cloned = clone $original;
$original -> property = "targetA";
$cloned -> property = "targetB";

$original -> call();
$cloned -> call();


