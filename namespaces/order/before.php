<?php 
namespace B{
    function callee(){ echo "in namespace B\n";}
}
namespace A\B {
    function callee(){ echo "in namespace A\\B\n"; }
}

namespace {
    // The B\callee() is compiled as FCALL("B\callee")
    function caller(){ B\callee(); }
    B\callee();                     // in namespace B
    caller();                       // in namespace B
    use A\B; 
    B\callee();                     // in namespace A\B
    caller();                       // in namespace B
}



