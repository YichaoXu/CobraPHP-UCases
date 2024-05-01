<?php
function echo_info_1() { echo "Hello world 1!"; }

function echo_info_2() { echo "Hello world 2!"; }

$a = null;
$b = null;
$c = 'echo_info_1';
$d = 'echo_info_2';

$action = $a ?? $b ?? $c ?? $d;
$action(); // calls echo_info_1

