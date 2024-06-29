<?php
function test_case_0() { echo "wrong result hi\n"; }
function test_case_1() { echo "correct result hi\n"; }
function test_case_2() { echo "wrong result php\n"; }
function test_case_3() { echo "correct result php\n"; }

// case 0,1
$a = "hi";
$b = bin2hex($a);
$c = "48656c6c6f20776f726c6421";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2,3
$a1 = "php";
$b1 = bin2hex($a1);
$c1 = "504850";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();
?>
