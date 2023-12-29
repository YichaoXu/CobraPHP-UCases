<?php


class Core {
    public function target() { echo "core -> target"; }
}

class Container {
    public $core;
    public function __construct($outCore = null){ $this -> core = $outCore; }
}

$container = new Container(new Container(new Container(new Container(new Core()))));

$container -> core -> core -> core -> core -> target();
