<?php

class ParentClass {
    function __construct(){ echo "Parent Construct.\n";}
    function testMethod(){ echo "testMethod\n"; }
}
class TestClass{
    function __construct(){ echo "TClass Construct.\n"; }
    function testMethod(){ echo "testMethod\n"; }
}

$testVariable = new TestClass();
$testVariable -> testMethod();
