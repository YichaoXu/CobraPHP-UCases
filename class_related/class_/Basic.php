<?php

namespace class_related\class_;

class Basic{
    var $prop0 = 0;
    public string $prop = "";
    protected $pp1 = 1, $pp2 = 2;
    static $isStatic = true;
    const CONSTANT_INCLASS = "INCLASS";
    private $pp3, $pp4;
    readonly bool $readonly;
    public readonly bool $readonly2;
    public function func(){}
    public function __construct(){
        $readonly = true;
        $readonly2 = false;
        self::$isStatic = false;
    }
}
const CONSTANT_INGLOBAL = "INGLOBAL";
$obj = new Basic();
echo $obj -> prop;