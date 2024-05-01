<?php
function test_case_0()
{
    echo "'&&' works for only one true\n";
}

function test_case_1()
{
    echo "'&&' works for both true\n";
}

$a = true;
$b = false;

$bool = (int)($a && $b);
$action = 'test_case_' . $bool;
$action();
?>
