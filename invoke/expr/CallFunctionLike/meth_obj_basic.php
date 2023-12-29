<?php

Class Property {
    function target(){ echo "property->target\n"; }
}

Class Basic {
    public $property;

    public function __construct() { $this -> property = new Property(); }
    public function target() { $this -> property -> target(); }

}

$basic = new Basic();
$basic -> target();
$basic -> property -> target();
