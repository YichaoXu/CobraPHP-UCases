<?php
function test_case_0()
{
    echo "0 is natural number\n";
}

function test_case_1()
{
    echo "1 is natural number\n";
}

function test_case_2()
{
    echo "2 is natural number\n";
}

function getStatusMessage($status)
{
    return match ($status) {
        200 => 0,
        404 => 1,
        500 => 2,
        default => 3
    };
}

$a = getStatusMessage(200);
$action = 'test_case_' . ($a);
$action();
$b = getStatusMessage(404);
$action = 'test_case_' . ($b);
$action();
$c = getStatusMessage(500);
$action = 'test_case_' . ($c);
$action();

?>