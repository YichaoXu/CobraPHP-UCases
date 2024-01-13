<?php

Class Property {
    function target(){ echo "property->target\n"; }
}

Class Basic {
    public $property;

    public function __construct() { $this -> property = new Property(); }
    public function target() { $this -> property -> target(); } // L4

}

$basic = new Basic();
$basic -> target();
$basic -> property -> target();
