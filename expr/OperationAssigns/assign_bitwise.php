<?php
// Function definition with parameters
function int(int $n): int
{
    echo "$n";
    return $n;
}

$a = 0x3f3f3f3f;
$b = 0x5e5e5e5e;
$a &= $b;
$c = int($a);
echo "$c";

$a = 0x3f3f3f3f;
$b = 0x5e5e5e5e;
$a |= $b;
$c = int($a);
echo "$c";

$a = 0x3f3f3f3f;
$b = 0x5e5e5e5e;
$a ^= $b;
$c = int($a);
echo "$c";

$a = 0x3f3f3f3f;
$b = 0x5e5e5e5e;
$a <<= $b;
$c = int($a);
echo "$c";

$a = 0x3f3f3f3f;
$b = 0x5e5e5e5e;
$a >>= $b;
$c = int($a);
echo "$c";
?>