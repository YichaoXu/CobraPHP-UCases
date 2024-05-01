<?php
function test_case_8()
{
    echo "bitwise left shift gives 8\n";
}

function test_case_0()
{
    echo "bitwise left shift gives 0\n";
}

function test_case_1073741824()
{
    echo "bitwise left shift gives 1073741824\n";
}

$action = 'test_case_' . (4 << 1); // 8
$action();

$action = 'test_case_' . (4 << 28); // 1073741824
$action();

$action = 'test_case_' . (4 << 62); // 0
$action();

$action = 'test_case_' . -(-4 << 1); // 8
$action();

$action = 'test_case_' . -(-4 << 28); // 1073741824
$action();

$action = 'test_case_' . (-4 << 62); // 0
$action();
?>
