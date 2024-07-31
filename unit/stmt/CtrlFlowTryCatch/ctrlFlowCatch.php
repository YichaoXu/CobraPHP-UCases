<?php

class CtrlFlowCatch extends Exception {
    function callee($data)
    {
        echo "data: $data";
    }
}

try {
    $vul_data = $_GET["user-input"];
    $sec_data = "security-data";
    throw new CtrlFlowCatch("CtrlFlowCatch");
} catch (CtrlFlowCatch $e) {
    $e->callee($vul_data);
    $e->callee($sec_data);
} catch (Exception $e) {
    echo "data: $vul_data";
    echo "data: $sec_data";
}
