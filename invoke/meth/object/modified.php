<?php

class Core {
    public function target() { echo "core -> target"; }
}

class ContainerA {
    public $core;
    public function set($outCore = null){ $this -> core = $outCore; }
}

class ContainerB {
    public function set($outCore = null){ $this -> core = $outCore; }
    public function call(){ $this -> core -> core -> target(); } // it is a private case.
}

$container_a = new ContainerA();
$container_b = new ContainerB();
$container_a -> set(new Core());
$container_b -> set($container_a);
$container_b -> call();

