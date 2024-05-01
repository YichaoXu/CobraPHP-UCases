<?php

class Test
{
    function caller($data): Void
    {
        $this->callee1($data);
    }

    private function callee1($data): Void
    {
        echo "callee1\n";
        $this->callee2($data);
    } // L3

    private function callee2($data): Void
    {
        echo "callee2\n". $data;
    }

}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

(new Test())->caller($vul_data);
(new Test())->caller($sec_data);
