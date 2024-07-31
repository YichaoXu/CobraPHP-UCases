<?php

function callee($data, $cond1, $cond2): void
{
    if ($cond1) echo "data";
    else if ($cond2) echo $data;
    else echo "data";
}

$vul_data = $_GET["user-input"];

callee($vul_data, true, true);
callee($vul_data, true, false);
callee($vul_data, false, true);
callee($vul_data, false, false);
