<?php
function test_case_1() { echo "1 is natural number\n"; }
function test_case_0() { echo "0 is natural number\n"; }

$a = 6;
$b = 3;
$c = ($a > $b) ? 1 : 0;
$action = 'test_case_'.($c);
$action();

$c = ($a < $b) ? 1 : 0;
$action = 'test_case_'.($c);
$action();
?>