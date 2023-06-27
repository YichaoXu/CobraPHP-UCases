<?php

class Inner {
    function method(): void {echo "inner method\n";}
}

class Outer{
    public $inner;

    public function __construct($param) {
        $this -> inner = $param;
    }

    function method(): void { echo "outer method\n"; }
}

$data = new Outer(new Inner());
$data -> inner -> method(); // line 14
$data -> method();          // line 4