<?php
function test_case_1()
{
    echo "bitwise xor gives 1\n";
}

function test_case_4()
{
    echo "bitwise xor gives 4\n";
}

function test_case_5()
{
    echo "bitwise xor gives 5\n";
}

function test_case_7()
{
    echo "bitwise xor gives 7\n";
}

function test_case_13()
{
    echo "bitwise xor gives 13\n";
}

$action = 'test_case_' . (0 ^ 5); // 5, (5 = 0101) = (0 = 0000) ^ (5 = 0101)
$action();

$action = 'test_case_' . (1 ^ 5); // 4, (4 = 0100) = (1 = 0001) ^ (5 = 0101)
$action();

$action = 'test_case_' . (2 ^ 5); // 7, (7 = 0111) = (2 = 0010) ^ (5 = 0101)
$action();

$action = 'test_case_' . (4 ^ 5); // 1, (1 = 0001) = (4 = 0100) ^ (5 = 0101)
$action();

$action = 'test_case_' . (8 ^ 5); // 13, (13 = 1101) = (8 = 1000) ^ (5 = 0101)
$action();
?>
