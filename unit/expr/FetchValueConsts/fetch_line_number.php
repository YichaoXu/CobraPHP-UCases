<?php
function func_4()
{
    echo "fetch line const success\n";
}

function func_6()
{
    echo "fetch line const success\n";
}

$var = "func_" . __LINE__;
$var();
$var = "func_" . __LINE__;
$var();
?>