<?php

class TestConstMethNameClass {

    function test($data) {
        $callee = __METHOD__;
        $callee($data);
    }

}

function calltest($data): void {
    echo "data is " . $data;
}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$func_name = "call" . __FILE__;

$func_name($vul_data);
$func_name($sec_data);
