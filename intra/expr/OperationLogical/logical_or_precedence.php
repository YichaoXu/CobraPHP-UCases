<?php

function test_case_0() { echo "condition is false\n"; }
function test_case_1() { echo "condition is true\n"; }

// Acts like: ($a = (false or true))
$a = false || true;
$bool1 = (int) ($a);
$action1 = 'test_case_'.$bool1;
$action1();

// Acts like: (($b = false) and true)
$b = false or true;
$bool2 = (int) ($b);
$action2 = 'test_case_'.$bool2;
$action2();

?>
