<?php

class Test
{
    private function callee($data): Void
    {
        echo "callee\n" . $data;
        $this->caller($data);
    }

    function caller($data): Void
    {
        echo "caller\n" . $data;
        $this->callee($data);
    }

}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$test = new Test();
$test->caller($vul_data);
$test->caller($sec_data);