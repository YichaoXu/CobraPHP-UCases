<?php

namespace {
    function some_func()
    {
        echo "GLOBAL SOME_FUNC\n";
    }
}

namespace A {
    some_func();
}

namespace B {
    function some_func()
    {
        echo "B SOME_FUNC\n";
    }

    some_func();
}