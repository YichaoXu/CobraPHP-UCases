<?php
function test_case_5() { echo "bitwise or gives 5\n"; }
function test_case_7() { echo "bitwise or gives 7\n"; }
function test_case_13() { echo "bitwise or gives 13\n"; }

$action = 'test_case_' . (0 | 5); // 5, (5 = 0101) = (0 = 0000) | (5 = 0101)
$action();

$action = 'test_case_' . (1 | 5); // 5, (5 = 0101) = (1 = 0001) | (5 = 0101)
$action();

$action = 'test_case_' . (2 | 5); // 7, (7 = 0111) = (2 = 0010) | (5 = 0101)
$action();

$action = 'test_case_' . (4 | 5); // 5, (5 = 0101) = (4 = 0100) | (5 = 0101)
$action();

$action = 'test_case_' . (8 | 5); // 13, (13 = 1101) = (8 = 1000) | (5 = 0101)
$action();
?>
