<?php

namespace a\b {
    function callee(){ echo "ab call\n"; }
}

namespace b {
    function callee(){ echo "b call\n"; }
}

namespace {

    function call_a(){  do_something();  }
    function call_b(){  do_something();  }
    function define_do_something($cond){
        if ($cond) { //
            function do_something(){/*in true branch*/}
        } else {
            function do_something(){/*in false branch*/}
        }
    }
    //cond == *
    define_do_something($_GET("COND_ENV"));
    call_a();
    call_b();
}
