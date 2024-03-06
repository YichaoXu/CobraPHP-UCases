<?php
function test_case_0() { echo "bitwise not works for negative number\n"; }
function test_case_1() { echo "bitwise not works for zero\n"; }
function test_case_2() { echo "bitwise not works for positive number\n"; }

$action = 'test_case_'.(~-1); // 0
$action();

$action = 'test_case_'.-(~0); // 1
$action();

$action = 'test_case_'.-(~1); // 2
$action();
?>
