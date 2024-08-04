<?php
function test_case_10()
{
    echo "binary plus worked for ints\n";
}

function test_case_11()
{
    echo "binary plus worked for floats\n";
}

$a = 4;
$b = 6;
$action = 'test_case_' . ($a + $b);
$action();

$action = 'test_case_' . ($b + $a);
$action();

$a = 4.00;
$b = 7.00;
$action = 'test_case_' . ($a + $b);
$action();

$action = 'test_case_' . ($b + $a);
$action();
?>
