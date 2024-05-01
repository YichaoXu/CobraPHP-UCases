<?php
function func_test() { echo "fetch function name success\n"; }
function test() {
    $var = "func_".__FUNCTION__;
    $var();
}
test();