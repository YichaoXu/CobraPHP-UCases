<?php
// Function definition with parameters
function string(string $n): string {
    echo "$n";
    return $n;
}
$a = null;
$a ??= "Johns Hopkins";
$c = string($a);

echo "$c";
?>