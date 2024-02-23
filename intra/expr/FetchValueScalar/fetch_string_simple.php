<?php
// Function definition with parameters
function num(string $n): string {
    echo "$n";
    return $n;
}
$a = "Hello, world";
$b = num($a);

echo "$b";
?>