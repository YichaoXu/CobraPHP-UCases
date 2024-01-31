<?php

class SomeClass {
    function some_method() { echo "some_method"; }
}

function some_func($arr){
    $arr[0]->some_method();
}

$some_var = array(new SomeClass());
some_func($some_var);
