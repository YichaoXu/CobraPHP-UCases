<?php
function test_case_4() { echo "unary predecrement worked\n"; }

$a = 5;
$action = 'test_case_'.(--$a);
$action();
$action = 'test_case_'.$a;
$action();
?>
