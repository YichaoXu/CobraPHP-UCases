<?php

class DeclareClass
{
    public function callee($data): void
    {
        echo "data, $data\n";
    }

}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$obj = new DeclareClass();
$obj -> callee($vul_data);
$obj -> callee($sec_data);
