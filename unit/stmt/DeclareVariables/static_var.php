<?php
static $a = 0;
function test_case_0()
{
    echo "0\n";
}

$action = 'test_case_' . ($a);
$action();

?>