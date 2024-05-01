<?php

class Test
{
    function caller($data): void
    {
        echo "callee\n" . $data;
    }
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$test = new Test();
$test->caller($vul_data);
$test->caller($sec_data);
