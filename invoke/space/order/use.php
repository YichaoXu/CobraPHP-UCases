<?php 
/* We define a new namespace B in the following block, where there is a function "callee" in Line 7. */
namespace B{
    function callee(){ echo "in namespace B\n";}
}

/* 
 * We define another namespace A\B. The A\B and B is completely two different space, and they don't
 * have any hierarchy relation. There is also a function "callee", but please notice that it is different
 * with the previous "callee" in L7.
 */
namespace A\B {
    function callee(){ echo "in namespace A\\B\n"; }
}

namespace {
    // We define a function "caller" in global space, in which we call test01\callee(); 
    // Because the "namespace" and "use" are handled during compiling, so the call will
    // be converted to FCALL("test01\callee") after compiling. The "use" in line 23 will 
    // not influnce the function definition. 
    function caller(){ B\callee(); }
    B\callee();                     // in namespace B
    caller();                       // in namespace B
    use A\B; 
    B\callee();                     // in namespace A\B
    caller();                       // in namespace B
}




