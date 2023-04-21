<?php declare(strict_types=1);

$PI = 3.1415;

function add(int $a, int $b): int
{
    return $a + $b;
}


function multiple(int $a, int $b): int
{
    return $a * $b;
}


function divide(int $a, int $b): int
{
    return $a / $b;
}

function minus(int $a, int $b): int
{
    return $a - $b;
}

function circle_area(float $radius): float
{
    global $PI;
    return $radius * $radius * $PI;
}