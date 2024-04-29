<?php

class Test
{
    function caller()
    {
        echo "callee\n";
    }
}


$test = new Test();
$test->caller();
