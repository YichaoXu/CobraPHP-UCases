<?php

namespace B {
    function callee()
    {
        echo "in namespace B\n";
    }
}

namespace A\B {
    function callee()
    {
        echo "in namespace A\\B\n";
    }
}

namespace {
    B\callee();                     // in namespace B (L3)
    caller();                       // in namespace A\B (L16)
    use A\B;

    B\callee();                     // in namespace A\B (L6)
    caller();                       // in namespace A\B (L16)
    // The B\callee() is compiled as FCALL("A\B\callee")
    function caller()
    {
        B\callee();
    } // in namespace A\B (L6)
}



