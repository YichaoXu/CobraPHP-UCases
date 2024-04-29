<?php

class TestClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    static function testMethod()
    {
        echo "testMethod\n";
    }
}

TestClass::testMethod();
