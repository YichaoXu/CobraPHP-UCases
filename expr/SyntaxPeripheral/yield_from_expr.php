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
    $array = [1, 2, 3];
    yield from $array;
}

foreach (countTo() as $a) {
    $action = 'test_case_' . ($a);
    $action();
}
?>