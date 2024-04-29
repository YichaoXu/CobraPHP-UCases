<?php

class TestClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    function testMethod()
    {
        echo "testMethod\n";
    }
}

$
$testVariable = new TestClass();    // L4: __construct
$testVariable->testMethod();      // L5: testMethod
