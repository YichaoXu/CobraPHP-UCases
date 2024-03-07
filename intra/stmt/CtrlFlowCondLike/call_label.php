<?php
#I did not understand why this file is in control flow condition like test

function one_param_1($param): void {
    $param($_GET["user_input"]);
}

function two_param($param1, $param2): void {
    echo "two_param \t";
    $param1($param2);
}

$vul = fn($v) => printf("logging". $v);

two_param(param1: "one_param_1", param2: $vul);



