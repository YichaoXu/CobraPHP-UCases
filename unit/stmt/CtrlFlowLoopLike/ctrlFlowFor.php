<?php

$sec_data = "security-data";
$vul_data = $_GET["user-input"];

$array = [$sec_data, $vul_data];

$b = 0;

for ($i = 0; $i < 2; $i++) {
    echo "data: " . $array[$i];
}
