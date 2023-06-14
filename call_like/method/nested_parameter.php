<?php

class Inner {
    function method(): void {echo "inner method\n";}
}

class Outer{
    public Inner $inner;

    public function __construct() {
        $this -> inner = new Inner();
    }

    function method(): void {echo "outer method\n";}
}


function some_func($data): void {
    $data -> inner -> method();     // line 14
    $data -> method();              // line 4
}

some_func(new Outer());             // line 18
