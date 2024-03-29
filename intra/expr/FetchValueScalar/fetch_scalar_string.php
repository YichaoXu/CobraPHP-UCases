<?php
function simple() { echo ("Single quotes worked. \n"); }
function not_so_simple() { echo ("Multiple lines worked. \n"); }
function double_quotes() { echo ("Double qutoes worked.\n"); }
function var_not_expand() { echo ("Variable not expand worked.\n"); }
function newline_sign_not_expand() { echo ("Newline sign not expand worked.\n"); }

$str = 'simple';
$str();

$str = 'not_so_
simple';
$str = str_replace("\n", "", $str);
$str();

$str = 'double_"quotes"';
$str = str_replace('"', '', $str);
$str();

$str = '$var_not_expand';
$str = str_replace('$', '', $str);
$str();

$str = '\n_newline_sign_not_expand';
$str = str_replace('\n_', "", $str);
$str();
?>
