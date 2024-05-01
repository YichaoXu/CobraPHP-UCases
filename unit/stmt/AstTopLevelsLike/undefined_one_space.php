<?php

namespace {
    B\call_some_func_underB(); // B\call
    use A\B;

    B\call_some_func_underB(); // A\B\call
    use function B\call_some_func_underB;

    call_some_func_underB(); // B\call
}

