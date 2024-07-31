<?php

function callFetchValueConsts($data): void {
    echo "data is " . $data;
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$func_name = "call" . __DIR__;

$func_name($vul_data);
$func_name($sec_data);
