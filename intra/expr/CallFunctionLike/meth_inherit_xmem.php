<?php

class ParentClass
{
    function __construct()
    {
        echo "Parent Construct.\n";
    }

    function overrideMethod()
    {
        echo "overrideMethod\n";
    }

    function inheritMethod()
    {
        echo "inheritMethod\n";
    }
}

class TestClass extends ParentClass
{
    function __construct()
    {
        echo "TClass Construct.\n";
    }

    function overrideMethod()
    {
        parent::overrideMethod();
        echo "overrideMethod\n";
    }
}

$testVariable = new TestClass();
$testVariable->overrideMethod();
$testVariable->inheritMethod();
