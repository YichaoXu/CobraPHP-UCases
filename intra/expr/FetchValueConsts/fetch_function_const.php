<?php
function func(){ echo "fetch function main success\n";}
function func_helper(){ echo "fetch function helper success\n"; }
$var = "func". __FUNCTION__;
$var();
function helper() {
    $var = "func_". __FUNCTION__;
    $var();
}
?>