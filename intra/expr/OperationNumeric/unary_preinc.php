<?php
function test_case_6() { echo "unary preincrement worked\n"; }

$a = 5;
$action = 'test_case_'.(++$a);
$action();
$action = 'test_case_'.$a;
$action();
?>
