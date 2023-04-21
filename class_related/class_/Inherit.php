<?php

namespace class_related\class_;

require_once("Basic.php");
class Inherit extends Basic{
    public string $prop = "1";
    public function __construct(){ parent::__construct(); }
}

$obj = new Inherit();
echo $obj->prop;

