<?php
function func_12()
{
    echo "fetch line const success\n";
}

function func_14()
{
    echo "fetch line const success\n";
}

$var = "func_" . __LINE__;
$var();
$var = "func_" . __LINE__;
$var();
?>
