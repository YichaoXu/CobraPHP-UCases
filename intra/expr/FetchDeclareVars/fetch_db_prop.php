<?php

class Core {
    function behavior() { echo "SOME BEH\n"; }
}

class Inner {
    function core() { return new Core(); }
}
class Outer {

    public Core $core;
    function inner() {
        $inner = new Inner();
        $this -> core = $inner -> core();
        return $this -> core;
    }

    function behavior() {
        $this -> core -> behavior();
    }
}

$out = new Outer();
$out -> inner();
$out -> behavior();
$out -> core -> behavior();
