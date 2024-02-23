<?php
// Function definition with parameters
function num(float $n): float {
    echo "$n";
    return $n;
}
$a = 42.0;
$b = num($a);

echo "$b";
?>