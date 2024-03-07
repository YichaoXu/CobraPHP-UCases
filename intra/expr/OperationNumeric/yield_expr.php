<?php
function test_case_1() { echo "0 is natural number\n"; }
function test_case_2() { echo "1 is natural number\n"; }
function test_case_3() { echo "2 is natural number\n"; }

function countTo($n) {
    for ($i = 1; $i <= $n; $i++) {
        yield $i;
    }
}
$generator = countTo(3);
$array = [];
foreach ($generator as $value) {
    array_push($array, $value)
}
[$a, $b, $c] = $array;
$action = 'test_case_'.($a);
$action();
$action = 'test_case_'.($b);
$action();
$action = 'test_case_'.($c);
$action();

?>