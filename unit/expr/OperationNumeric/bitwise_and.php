<?php
function test_case_0()
{
    echo "bitwise and gives 0\n";
}

function test_case_1()
{
    echo "bitwise and gives 1\n";
}

function test_case_4()
{
    echo "bitwise and gives 4\n";
}

$action = 'test_case_' . (0 & 5); // 0, (0 = 0000) = (0 = 0000) & (5 = 0101)
$action();

$action = 'test_case_' . (1 & 5); // 1, (1 = 0001) = (1 = 0001) & (5 = 0101)
$action();

$action = 'test_case_' . (2 & 5); // 0, (0 = 0000) = (2 = 0010) & (5 = 0101)
$action();

$action = 'test_case_' . (4 & 5); // 4, (4 = 0100) = (4 = 0100) & (5 = 0101)
$action();

$action = 'test_case_' . (8 & 5); // 0, (0 = 0000) = (8 = 1000) & (5 = 0101)
$action();
?>
