<?php
function test_case_12() { echo "binary multiply worked for ints\n"; }
function test_case_143() { echo "binary multiply worked for floats\n"; }
function test_case_26() { echo "binary multiply worked for int and floats\n"; }

$a = 6;
$b = 2;
$action = 'test_case_'.($a * $b);
$action();

$action = 'test_case_'.($b * $a);
$action();

$a = 1.3;
$b = 1.1;
$action = 'test_case_'.(100 * ($a * $b));
$action();

$action = 'test_case_'.(100 * ($b * $a));
$action();

$a = 1.3;
$b = 2;
$action = 'test_case_'.(10 * ($a * $b));
$action();

$action = 'test_case_'.(10 * ($b * $a));
$action();
?>