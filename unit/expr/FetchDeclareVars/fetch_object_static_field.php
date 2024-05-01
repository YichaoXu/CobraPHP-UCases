<?php

class MyClass
{
    public static $staticProperty = 0;

    public function displayStaticProperty()
    {
        // Accessing static property within a method
        echo self::$staticProperty;
        self::$staticProperty += 1;
    }
}

$obj1 = new MyClass();

echo "{$obj1::$staticProperty}";
$obj1->displayStaticProperty();
$intvalue = $obj1::$staticProperty;
if ($intvalue == $obj1) {
    echo "$intvalue";
}
