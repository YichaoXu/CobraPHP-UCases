<?php 
namespace B{
    function callee(){ echo "in namespace B\n";}
}
namespace A\B {
    function callee(){ echo "in namespace A\\B\n"; }
}

namespace {
    // The B\callee() is compiled as FCALL("B\callee")
    function caller(){ B\callee(); }// (L3)
    B\callee();                     // in namespace B (L3)
    caller();                       // in namespace B (L11)
    use A\B; 
    B\callee();                     // in namespace A\B (L6)
    caller();                       // in namespace B (L11)
}



