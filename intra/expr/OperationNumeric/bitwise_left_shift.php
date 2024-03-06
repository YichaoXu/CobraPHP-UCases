<?php
function test_case_8() { echo "bitwise left shift gives 8\n"; }
function test_case_1073741824() { echo "bitwise left shift gives 1073741824\n"; }
function test_case_2147483648() { echo "bitwise left shift gives 2147483648\n"; }
function test_case_4294967296() { echo "bitwise left shift gives 4294967296\n"; }

$action = 'test_case_' . (4 << 1); // 8
$action();

$action = 'test_case_' . (4 << 28); // 1073741824
$action();

$action = 'test_case_' . (4 << 29); // 2147483648
$action();

$action = 'test_case_' . (4 << 30); // 4294967296
$action();

$action = 'test_case_' . -(-4 << 1); // -(-8) = 8
$action();

$action = 'test_case_' . -(-4 << 29); // -(-2147483648) = 2147483648
$action();

$action = 'test_case_' . -(-4 << 30); // -(-4294967296) = 4294967296
$action();
?>
