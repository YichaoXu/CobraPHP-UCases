<?php
function test_case_0() { echo "wrong result negative\n"; }
function test_case_1() { echo "correct result negative\n"; }
function test_case_2() { echo "wrong result above range\n"; }
function test_case_3() { echo "correct result above range\n"; }
function test_case_4() { echo "wrong result in range\n"; }
function test_case_5() { echo "correct result in range\n"; }

// case 0,1
$a = -159;
$b = chr($a);
$c = "a";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2,3
$a1 = 342;
$b1 = chr($a1);
$c1 = "V";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();

// case 4,5
$a2 = 33;
$b2 = chr($a2);
$c2 = "!";
$d2 = 4;
if ($b2 == $c2) {
	$d2 = 5;
}
$action = 'test_case_'.($d2);
$action();
?>
