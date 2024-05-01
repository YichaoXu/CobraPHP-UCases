<?php
function func_1234($data): void
{
    echo("Format 1 worked. $data\n");
}

function func_1200($data): void
{
    echo("Format 2 worked. $data\n");
}

function func_7($data): void
{
    echo("Format 3 worked.$data\n");
}

$vul_data = $_GET["user-input"];
$sec_data = "security-input";

$a = 1.234;
$a = "func_" . ($a * 1000);
$a($vul_data);
$a($sec_data);

$b = 1.2e3;
$b = "func_" . $b;
$b($vul_data);
$b($sec_data);

$c = 7E-3;
$c = "func_" . ($c * 1000);
$c($vul_data);
$c($sec_data);
