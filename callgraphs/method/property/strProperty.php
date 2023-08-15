<?php

class Holder {

    function method(): void { echo "inner method\n"; }
}


$data = new Outer(new Inner());
$data -> inner -> method(); // line 14
$data -> method();          // line 4