<?php 

namespace namespace01\test01 {

    require_once("crossfile_ns02.php");
    
    function scope_1(){
        echo "scope_1\n";
    }
    
    function scope_2($cond){
        $var = "1"; 
        if ($cond) $func = function () use ($var) { echo "true\n"; };
        else $func = function () use ($var) {echo "false\n";};
        $func(); 
        echo "scope_2\n";
    }
    scope_1();
}

namespace namespace03{
    function scope_1(){
        echo "scope_1\n";
    }
}

namespace namespace{
    
}

