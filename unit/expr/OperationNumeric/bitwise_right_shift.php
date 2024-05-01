<?php
function test_case_0()
{
    echo "bitwise right shift gives 0\n";
}

function test_case_1()
{
    echo "bitwise right shift gives 1\n";
}

function test_case_2()
{
    echo "bitwise right shift gives 2\n";
}

$action = 'test_case_' . (4 >> 1); // 2
$action();

$action = 'test_case_' . (4 >> 2); // 1
$action();

$action = 'test_case_' . (4 >> 3); // 0
$action();

$action = 'test_case_' . (4 >> 4); // 0
$action();

$action = 'test_case_' . -(-4 >> 1); // -(-2) = 2
$action();

$action = 'test_case_' . -(-4 >> 2); // -(-1) = 1
$action();

$action = 'test_case_' . -(-4 >> 3); // -(-1) = 1
$action();
?>