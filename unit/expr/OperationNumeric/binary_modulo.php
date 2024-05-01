<?php
function test_case_0()
{
    echo "modulo result is 0\n";
}

function test_case_1()
{
    echo "modulo result is 1\n";
}

function test_case_2()
{
    echo "modulo result is 2\n";
}

// Integer and integer
$action = 'test_case_' . (6 % 3); // 0, divisible
$action();

$action = 'test_case_' . (6 % 4); // 2, not divisible
$action();

// Float and float
// Note: converted to integer first. I think conversion is using the floor function, based on observation.
$action = 'test_case_' . (6.7823 % 2.437); // 0
$action();

$action = 'test_case_' . (7.29 % 2.435); // 1
$action();

// Float and int
$action = 'test_case_' . (7.29 % 2); // 1
$action();

// Sign specific
// Note: result of $a % $b will have the same sign as $a
$action = 'test_case_' . (5 % -3); // 2
$action();

$action = 'test_case_' . -(-5 % -3); // 2
$action();
?>
