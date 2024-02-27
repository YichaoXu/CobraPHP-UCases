<?php
function test_case_0() { echo "'&&' works for only one true\n"; }
function test_case_1() { echo "'&&' works for both true\n"; }

$a = true;
$b = true;
$c = false;

$bool1 = (int) ($a && $b);
$action1 = 'test_case_'.$bool1;
$action1();

$bool2 = (int) ($a && $c);
$action2 = 'test_case_'.$bool2;
$action2();
?>

