<?php
function echo_info() { echo "Hello world!"; }

$a = null;
$action = $a ?? 'echo_info';
$action();