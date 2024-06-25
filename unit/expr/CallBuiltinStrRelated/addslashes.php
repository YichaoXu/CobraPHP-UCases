<?php
function test_case_0() { echo "wrong result O'Reilly\n"; }
function test_case_1() { echo "correct result O'Reilly\n"; }
function test_case_2() { echo "wrong result quote backslash\n"; }
function test_case_3() { echo "correct result quote backslash\n"; }
function test_case_4() { echo "wrong result doubleslash\n"; }
function test_case_5() { echo "correct result doubleslash\n"; }

// case 0,1
$a = "Is your name O'Reilly?";
$b = addslashes($a);
$c = "Is your name O\'Reilly?";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2,3
$a1 = "\"quote\" and a backslash \\";
$b1 = addslashes($a1);
$c1 = "\\\"quote\\\" and a backslash \\\\";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();

// case 4,5
$a2 = "\"double\"";
$b2 = addslashes($a2);
$c2 = "\\\"double\\\"";
$d2 = 4;
if ($b2 == $c2) {
	$d2 = 5;
}
$action = 'test_case_'.($d2);
$action();
?>
