<?php

class ConstMethNameClass {

    function test() : void {
        $vul_data = $_GET["user-input"];
        $meth_name = "ConstMethNameClass::test";
        if (__METHOD__ == $meth_name)
            echo $vul_data;
        else
            echo $vul_data;
    }

}

$obj = new ConstMethNameClass();
$obj -> test();
