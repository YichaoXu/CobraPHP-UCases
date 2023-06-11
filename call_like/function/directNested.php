<?php
function test(){
    function callee_inner(){ echo "inside of func test\n";}
    function caller(){ callee_outter(); } // line 7
}

function callee_outter(){ echo "outside of func test\n";}

test();             // line 2
caller();           // line 4
callee_inner();     // line 3

