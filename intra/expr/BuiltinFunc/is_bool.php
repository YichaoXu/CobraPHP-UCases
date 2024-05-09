<?php
function test_case_2() { echo "binary divide works for integer values evenly divisible\n"; }
function test_case_5() { echo "binary divide works for integer values not evenly divisible\n"; }


$a = true;
$b = 0;

if (is_bool($a)) {
	echo "a is boolean value";
	$b = 5;
}
$action1 = 'test_case_'.$b;
$action1();
$c = 10;
$d = 2;
if (is_bool($c)) {
	echo "a is boolean value";
	$d = 5;
}
$action2 = 'test_case_'.$d;
$action2();
?>