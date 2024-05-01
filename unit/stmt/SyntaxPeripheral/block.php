<?php

function test_case_0() { echo "0\n"; }
{$a = -1; $b = $a + 1;}
$action = 'test_case_' . ($b);
$action();
?>