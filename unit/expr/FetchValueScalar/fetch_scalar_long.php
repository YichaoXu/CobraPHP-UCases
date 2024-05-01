<?php
function func_1234($data): Void
{
    echo("Decimal worked. $data");
}

function func_83($data): Void
{
    echo("Octal worked. $data");
}

function func_26($data): Void
{
    echo("Hexadecimal worked. $data");
}

function func_255($data): Void
{
    echo("Binary worked. $data");
}

$vul_data = $_GET["user-input"];
$sec_data = "security-input";

$a = 1234; // decimal number
$a = "func_" . $a;
$a($vul_data);
$a($sec_data);

$a = 0123; // octal number (equivalent to 83 decimal)
$a = "func_" . $a;
$a($vul_data);
$a($sec_data);

$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = "func_" . $a;
$a($vul_data);
$a($sec_data);

$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = "func_" . $a;
$a($vul_data);
$a($sec_data);
