<?php
function Base_Class() { echo "fetch classname success"; }
class BaseClass {
    function func() {
        $var = __CLASS__;
        $var();
    }
}
$var = new BaseClass();
$var->func();
?>
