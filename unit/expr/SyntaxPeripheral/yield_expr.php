<?php
function test_case_1()
{
    echo "0 is natural number\n";
}

function test_case_2()
{
    echo "1 is natural number\n";
}

function test_case_3()
{
    echo "2 is natural number\n";
}

function countTo()
{
    yield 1;
}

foreach (countTo() as $a) {
    $action = 'test_case_' . ($a);
    $action();
}
?>