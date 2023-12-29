<?php

function targetA() { echo "TARGET A" ;}
function targetB() { echo "TARGET B" ;}
class MyClass {
    public $property;
}

$original = new MyClass();
$cloned = clone $original;
$original -> property = "targetA";
$cloned -> property = "targetB";

($original -> property)();
($cloned -> property)();


