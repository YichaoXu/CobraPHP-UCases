<?php

trait DeclareTrait
{
    public function callee($data): void{
        echo "data, $data\n";
    }
}

class DeclareTraitTest
{
    use DeclareTrait;
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$obj = new DeclareTraitTest();
$obj -> callee($vul_data);
$obj -> callee($sec_data);
