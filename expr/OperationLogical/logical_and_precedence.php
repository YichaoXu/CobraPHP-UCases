<?php

function test_case_0()
{
    echo "condition is false\n";
}

function test_case_1()
{
    echo "condition is true\n";
}

// Acts like: ($a = (true && false))
$a = true && false;
$bool1 = (int)($a);
$action1 = 'test_case_' . $bool1;
$action1();

// Acts like: (($b = true) and false)
$b = true and false;
$bool2 = (int)($b);
$action2 = 'test_case_' . $bool2;
$action2();

?>
