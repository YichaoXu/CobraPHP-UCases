<?php
// Function definition with parameters
function string(string $n): string
{
    echo "$n";
    return $n;
}

$a = "Hello, world";
$b = $a;
$c = string($b);

echo "$c";

function int(int $n): int
{
    echo "$n";
    return $n;
}

$a = 2;
$b = $a;
$c = int($b);

echo "$c";

function float(float $n): float
{
    echo "$n";
    return $n;
}

$a = 2.0;
$b = $a;
$c = float($b);

echo "$c";
?>