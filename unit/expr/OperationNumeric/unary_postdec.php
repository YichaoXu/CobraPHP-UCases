<?php
function test_case_5() { echo "unary postdecrement worked when decrementing\n"; }
function test_case_4() { echo "unary postdecrement worked after decremented\n"; }

$a = 5;
$action = 'test_case_'.($a--);
$action();
$action = 'test_case_'.$a;
$action();
?>
