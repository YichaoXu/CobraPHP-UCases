<?php
function func_1234() { echo ("Decimal worked."); }
function func_83() { echo ("Octal worked."); }
function func_26() { echo ("Hexadecimal worked."); }
function func_255() { echo ("Binary worked."); }

$a = 1234; // decimal number
$a = "func_".$a;
$a();
$a = 0123; // octal number (equivalent to 83 decimal)
$a = "func_".$a;
$a();
$a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
$a = "func_".$a;
$a();
$a = 0b11111111; // binary number (equivalent to 255 decimal)
$a = "func_".$a;
$a();
?>
