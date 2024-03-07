<?php

function test_case_0() { echo "0\n"; }
class MyClass {
    public $A = 0;
}

$action = 'test_case_' . (MyClass::A);
$action();

?>