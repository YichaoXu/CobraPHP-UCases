<?php
function test_case_0() { echo "wrong result hw\n"; }
function test_case_1() { echo "correct result hw\n"; }
function test_case_2() { echo "wrong result capital\n"; }
function test_case_3() { echo "correct result capital\n"; }

// case 1
$a = "Hello world!";
$b = bin2hex($a);
$c = "48656c6c6f20776f726c6421";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2
$a1 = "PHP";
$b1 = bin2hex($a1);
$c1 = "504850";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();
?>
