<?php
namespace {
    B\call(); // B\call
    use A\B;
    B\call(); // A\B\call
    use function B\call;
    call(); // B\call
}

namespace B {
    function call(){ echo "b/call" . "\n"; }
}

namespace A\B {
    function call(){ echo "a/b/call" . "\n"; }
}

