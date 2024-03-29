<?php
function func_test() { echo "fetch function name success\n"; }
function test() {
    $var = "func_".__FUNCTION__;
    $var();
}
test();
class BaseClass {
    function test_new() {
        $var = "func_".__FUNCTION__;
        $var();
    }
}
$var = new BaseClass();
$var->test_new();
?>