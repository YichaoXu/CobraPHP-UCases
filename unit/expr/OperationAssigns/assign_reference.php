<?php
// Function definition with parameters
function reference(&$n){
    echo "$n";
    return $n;
}
$a = "Hello, world";
$b = $a;
$c = reference($b);

echo "$c";

$a = 2;
$b = $a;
$c = reference($b);

echo "$c";

$a = 2.0;
$b = $a;
$c = reference($b);

echo "$c";
?>