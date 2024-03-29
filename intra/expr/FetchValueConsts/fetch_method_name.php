<?php
function func_base() { echo "fetch method name success\n"; }
function func_test() { echo "fetch method name success\n"; }
class BaseClass {
    function test() {
        $var = __METHOD__;
        $var = "func_".$var[0].$var[1].$var[2].$var[3];
        $var();
        $var = "func_".$var[-4].$var[-3].$var[-2].$var[-1];
        $var();
    }
}
$var = new BaseClass();
$var->test();
?>