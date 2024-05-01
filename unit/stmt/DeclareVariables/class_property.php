<?php

function foo()
{
    echo "CALL FOO\n";
}

class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

class Bar extends Foo
{
    public function fooStatic()
    {
        return parent::$my_static;
    }
}


(Foo::$my_static)();

$foo = new Foo();
($foo->staticValue())();
($foo::$my_static)();

$classname = 'Foo';
($classname::$my_static)();
(Bar::$my_static)();

$bar = new Bar();
($bar->fooStatic())();
?>
