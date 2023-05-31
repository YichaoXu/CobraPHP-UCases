<?php
namespace {
    B\call_some_func_underB(); // B\call
    use A\B;
    B\call_some_func_underB(); // A\B\call
    use function B\call_some_func_underB;
    call_some_func_underB(); // B\call
}

namespace B {
    function call_some_func_underB(){ echo "b/call_some_func_underB" . "\n"; }
}

namespace A\B {
    function call_some_func_underB(){ echo "a/b/call_some_func_underB" . "\n"; }
}
