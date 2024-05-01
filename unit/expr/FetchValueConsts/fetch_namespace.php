<?php

namespace Test {
    function func_Test()
    {
        echo "fetch namespace success";
    }

    $var = "Test\\func_" . __NAMESPACE__;
    $var();
}
?>