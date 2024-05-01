<?php
function test_case_2()
{
    echo "binary divide works for integer values evenly divisible\n";
}

function test_case_5()
{
    echo "binary divide works for integer values not evenly divisible\n";
}

function test_case_7()
{
    echo "binary divide works for floats evenly divisible\n";
}

function test_case_66()
{
    echo "binary divide works for floats not evenly divisible\n";
}

function test_case_75()
{
    echo "binary divide works for integer and float\n";
}

$a = 6;
$b = 3;
$action = 'test_case_' . ($a / $b);
$action();

$action = 'test_case_' . (10 * ($b / $a));
$action();

$a = 1.75;
$b = 0.25;
$action = 'test_case_' . ($a / $b);
$action();

$a = 1.65;
$b = 0.25;
$action = 'test_case_' . (10 * ($a / $b));
$action();

$a = 1.5;
$b = 2;
$action = 'test_case_' . (100 * ($a / $b));
$action();
?>
