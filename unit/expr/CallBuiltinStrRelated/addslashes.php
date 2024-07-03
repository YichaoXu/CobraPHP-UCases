<?php
function test_case_0($param) { echo "wrong result O'Reilly\n". $param; }
function test_case_1($param) { echo "correct result O'Reilly\n". $param; }
function test_case_2($param) { echo "wrong result quote backslash\n". $param; }
function test_case_3($param) { echo "correct result quote backslash\n" . $param; }
function test_case_4($param) { echo "wrong result doubleslash\n" . $param; }
function test_case_5($param) { echo "correct result doubleslash\n" . $param; }

$vul_data = $_GET['data'];
$sec_data = "secret data";

// case 0,1
$a = "Is your name O'Reilly?";
$b = addslashes($a);
$c = "Is your name O\'Reilly?";
$d = 0;
if ($b == $c) {
	$d = 1;
}
$action = 'test_case_'.($d); // test_case_1
$action($sec_data); // not occurred in path generated
$action($vul_data); // will occur in the path generated
// /:0 -> /:22 -> /:3 -> /:3 

// case 2,3
$a1 = "\"quote\" and a backslash \\";
$b1 = addslashes($a1);
$c1 = "\\\"quote\\\" and a backslash \\\\";
$d1 = 2;
if ($b1 == $c1) {
	$d1 = 3;
}
$action = 'test_case_'.($d1);
$action($sec_data); // not occurred in path generated
$action($vul_data); // will occur in the path generated

// case 4,5
$a2 = "\"double\"";
$b2 = addslashes($a2);
$c2 = "\\\"double\\\"";
$d2 = 4;
if ($b2 == $c2) {
	$d2 = 5;
}
$action = 'test_case_'.($d2);
$action($sec_data); // not occurred in path generated
$action($vul_data); // will occur in the path generated
