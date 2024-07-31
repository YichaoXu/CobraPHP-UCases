<?php
function func_BaseClass(): void
{
    echo "fetch classname success";
}

class BaseClass
{
    function func(): void
    {
        $var = "func_" . __CLASS__;
        $var();
    }
}

$var = new BaseClass();
$var->func();
?>
