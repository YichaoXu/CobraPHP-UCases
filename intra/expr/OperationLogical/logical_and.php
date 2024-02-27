<?php
function test_case_1() { echo "Both statements are true."; }
function test_case_2() { echo "1st statement is true, 2nd statement is false."; }
function test_case_3() { echo "1st statement is false, 2nd statement is true."; }
function test_case_4() { echo "Both statements are false."; }

$a = true;
$b = true;
$c = false;
$d = false;
if ($a and $b)
    test_case_1();
elseif ($a and $c)
    test_case_2();
elseif ($c and $a)
    test_case_3();
elseif ($c and $d)
    test_case_4();
?>
