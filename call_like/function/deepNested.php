<?php

namespace A {
    function first_def(){
        function inner_def(){
            function callee1(){ echo "inside of func test callee1\n";}
            function callee2(){ echo "inside of func test callee2\n";}
        } // line 7
    }
}

namespace B {
    \A\first_def();
    function caller($callee){ echo "outside of func test\n"; $callee(); }
}

namespace C{
    \A\inner_def();
    \B\caller("\A\callee1");
    \B\caller("\A\callee2");
}

