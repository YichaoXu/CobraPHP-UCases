<?php

function func_1234() { echo ("Format 1 worked.\n"); }
function func_1200() { echo ("Format 2 worked.\n"); }
function func_7() { echo ("Format 3 worked.\n"); }

$a = 1.234;
$a = "func_".($a*1000);
$a();

$b = 1.2e3;
$b = "func_".$b;
$b();

$c = 7E-3;
$c = "func_".($c*1000);
$c();
?>
