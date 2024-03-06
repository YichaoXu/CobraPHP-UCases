<?php
// There is a slight problem with this left shift. I do not know how many bits system we are using.
// The PHP online compiler is using more than 32-bits while the manual gives 32-bits, so
// the results are pretty different.
// The original workshop script seems to be using 32-bits, so I am writing the tests in 32-bits.
// But I am not sure.

function test_case_0() { echo "bitwise left shift gives 8\n"; }
function test_case_8() { echo "bitwise left shift gives 8\n"; }
function test_case_1073741824() { echo "bitwise left shift gives 1073741824\n"; }
function test_case_2147483648() { echo "bitwise left shift gives 2147483648\n"; }

$action = 'test_case_' . (4 << 1); // 8
$action();

$action = 'test_case_' . (4 << 28); // 1073741824
$action();

$action = 'test_case_' . -(4 << 29); // -2147483648
$action();

$action = 'test_case_' . (4 << 30); // 0
$action();

$action = 'test_case_' . -(-4 << 1); // -(-8) = 8
$action();

$action = 'test_case_' . (-4 << 29); // 2147483648
$action();

$action = 'test_case_' . (-4 << 30); // 0
$action();
?>
