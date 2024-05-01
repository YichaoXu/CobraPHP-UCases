<?php
function test_case_5()
{
    echo "unary postincrement worked when incrementing\n";
}

function test_case_6()
{
    echo "unary postincrement worked after incremented\n";
}

$a = 5;
$action = 'test_case_' . ($a++);
$action();
$action = 'test_case_' . $a;
$action();
?>
