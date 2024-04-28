<?php
function func_BaseClass() { echo "fetch classname success"; }
class BaseClass {
    function func() {
        $var = "func_".__CLASS__;
        $var();
    }
}
$var = new BaseClass();
$var->func();
?>
