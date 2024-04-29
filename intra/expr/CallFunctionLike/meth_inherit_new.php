<?php

class ParentClass
{
    function __construct()
    {
        echo "Parent Construct.\n";
    }
}

class TestClass extends ParentClass
{
    function __construct()
    {
        parent::__construct();
        ParentClass::__construct();
        echo "TClass Construct.\n";
    }
}

new TestClass();
