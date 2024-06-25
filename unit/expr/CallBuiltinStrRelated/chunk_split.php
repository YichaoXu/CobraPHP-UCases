<?php
function test_case_0() { echo "wrong result basic\n"; }
function test_case_1() { echo "correct result basic\n"; }
function test_case_2() { echo "wrong result longer seperator\n"; }
function test_case_3() { echo "correct result above range\n"; }
function test_case_4() { echo "wrong result outbound\n"; }
function test_case_5() { echo "correct result outbound\n"; }

// case 0,1
$a = "HelloWorld";
$b = chunk_split($a, 2, "-");
$c = "He-ll-oW-or-ld-";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d);
$action();

// case 2,3
$a1 = "Hello World";
$b1 = chunk_split($a1, 3, "$3 e!");
$c1 = "Hel$3 0lo $3 0Wor$3 0ld";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action();

// case 4,5
$a2 = "Hello World";
$b2 = chunk_split($a2, 25, "$");
$c2 = "Hello World$";
$d2 = 4;
if ($b2 == $c2) {
	$d2 = 5;
}
$action = 'test_case_'.($d2);
$action();
?>
