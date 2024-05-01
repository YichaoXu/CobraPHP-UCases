<?php
function test_case_0() { echo "'and' works for only one true\n"; }
function test_case_1() { echo "'and' works for both true\n"; }

$a = true;
$b = false;

$bool = (int) ($a and $b);
$action = 'test_case_'.$bool;
$action();
?>
