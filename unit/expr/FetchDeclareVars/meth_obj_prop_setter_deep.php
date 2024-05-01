<?php

class Inner {
    public function target(){ echo "INNER -> TARGET"; } // it is a private case.
}
class Container {
    public $core;

    function __construct(){$this -> core = new Container();}
    public function setInner() { $this -> core -> core = new Inner(); }
    public function callInner() { $this -> core -> core -> target(); }
}

$container = new Container();
$container -> setInner();
$container -> callInner();

