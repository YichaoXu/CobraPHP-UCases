<?php

class TestClass{
    function __construct(){ echo "TClass Construct.\n"; }
    function testMethod(){ echo "testMethod\n"; }
}

$testVariable = new TestClass();
$testVariable -> testMethod();
