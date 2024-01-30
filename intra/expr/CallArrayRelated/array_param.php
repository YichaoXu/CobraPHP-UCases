<?php

class SomeClass {
    function some_method() { echo "some_var";  }
}

function some_func($arr) {
    $arr[0] -> some_method();
}

$arr = array(new SomeClass());
some_func($arr);
