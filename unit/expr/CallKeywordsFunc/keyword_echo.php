<?php

function some_func()
{
    echo "ECHO IN FUNC;\n";
}

class SomeClass
{
    function call()
    {
        echo "ECHO IN METHOD;\n";
    }
}

some_func();
(new SomeClass())->call();
echo "ECHO IN GLOBAL;\n";
