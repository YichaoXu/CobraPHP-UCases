<?php
function simple() { echo ("Simple case worked.\n"); }
function not_so_simple() { echo ("Newline character worked. \n"); }
function func_0() { echo ("Variable numeric worked.\n"); }
function func_var() { echo ("Variable string worked.\n"); }

$str = "simple";
$str();

$str = "not_so_
simple";
$str = str_replace("\n", "", $str);
$str();

$str = "not_so_\nsimple";
$str = str_replace("\n", "", $str);
$str();

$var = 0;
$str = "func_$var";
$str();

$var = "var";
$str = "func_$var";
$str();
?>

