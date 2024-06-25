<?php
function test_case_0() { echo "wrong result no chars\n"; }
function test_case_1() { echo "correct result no chars\n"; }
function test_case_2() { echo "wrong result range\n"; }
function test_case_3() { echo "correct result range\n"; }
function test_case_4() { echo "wrong result tricky range\n"; }
function test_case_5() { echo "correct result tricky range\n"; }

// case 0,1
$a = "Hello World!    ";
$b = chop($a);
$c = "Hello World!";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2,3
$a1 = "123456789       ";
$b1 = chop($a1," 6..9");
$c1 = "12345";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();

// case 4,5
$a2 = "123456789   ";
$b2 = chop($a2, " 5..9....2");
$c2 = "1234";
$d2 = 4;
if ($b2 == $c2) {
	$d2 = 5;
}
$action = 'test_case_'.($d2);
$action();
?>
