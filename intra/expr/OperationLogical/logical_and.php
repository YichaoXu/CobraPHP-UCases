<?php
function test_case_1() { echo "'and' works for both true\n"; }
function test_case_0() { echo "'and' works for only one true\n"; }

$a = true;
$b = true;
$c = false;

$bool1 = (int) ($a and $b);
$action1 = 'test_case_'.$bool1;
$action1();

$bool2 = (int) ($a and $c);
$action2 = 'test_case_'.$bool2;
$action2();
?>
