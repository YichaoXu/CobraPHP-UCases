<?php
function test_case_0() { echo "'or' works for neither true\n"; }
function test_case_1() { echo "'or' works for only one true\n"; }

$a = false;
$b = false;

$bool = (int) ($a or $b);
$action = 'test_case_'.$bool;
$action();
?>
