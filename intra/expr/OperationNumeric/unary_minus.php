<?php
function test_case_12() { echo "unary minus worked for int\n"; }
function test_case_13() { echo "unary minus worked for float\n"; }

$a = -12;
$b = (-$a);
$action = 'test_case_'.$b;
$action();

$a = -13.000;
$b = (-$a);
$action = 'test_case_'.$b;
$action();
?>
