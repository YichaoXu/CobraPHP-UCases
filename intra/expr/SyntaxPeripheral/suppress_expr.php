<?php
function test_case_() { echo "1 is natural number\n"; }
function divide($dividend, $divisor) {
    return $dividend / $divisor;
}

$result = @divide(10, 0); 
$action = 'test_case_'.($result);
$action();


?>