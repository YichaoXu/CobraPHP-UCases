<?php

class Test
{
    function caller()
    {
        $this->callee1();
    }

    private function callee1()
    {
        echo "callee1\n";
        $this->callee2();
    } // L3

    private function callee2()
    {
        echo "callee2\n";
    }

}


$test = new Test();
$test->caller();
