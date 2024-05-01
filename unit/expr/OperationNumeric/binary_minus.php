<?php
function test_case_4()
{
    echo "binary minus worked for ints\n";
}

function test_case_3()
{
    echo "binary minus worked for floats\n";
}

$a = 6;
$b = 2;
$action = 'test_case_' . ($a - $b);
$action();

$action = 'test_case_' . -($b - $a);
$action();

$a = 7.00;
$b = 4.00;
$action = 'test_case_' . ($a - $b);
$action();

$action = 'test_case_' . -($b - $a);
$action();
?>
