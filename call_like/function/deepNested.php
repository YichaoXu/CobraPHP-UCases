<?php

namespace A {
    function first_def(){
        function inner_def(){
            function callee(){ echo "inside of func test\n";}
        } // line 7
    }
}

namespace B {
    \A\first_def();

    function caller(){ echo "outside of func test\n"; \A\callee(); }
}

namespace C{
    \A\inner_def();
    \B\caller();
}

