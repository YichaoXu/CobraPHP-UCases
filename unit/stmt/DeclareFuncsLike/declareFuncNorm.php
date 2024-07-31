<?php

function outerClassDef(): void
{
    class InnerClass
    {
        function callee($data): void
        {
            echo "data: $data \n";
        }
    }
}

outerClassDef();

$obj = new InnerClass();

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$obj -> callee($vul_data);
$obj -> callee($sec_data);

