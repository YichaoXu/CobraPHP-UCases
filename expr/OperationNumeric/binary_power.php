<?php
function test_case_36()
{
    echo "power of integer to integer works\n";
}

function test_case_225()
{
    echo "power of float to float works\n";
}

function test_case_144()
{
    echo "power of integer to float works\n";
}

// Integer and integer
$action = 'test_case_' . (6 ** 2); // 36
$action();

// Float and float
$action = 'test_case_' . (100 * (1.5 ** 2.0)); // 225
$action();

// Float and int
$action = 'test_case_' . (100 * (1.2 ** 2)); // 144
$action();
?>
