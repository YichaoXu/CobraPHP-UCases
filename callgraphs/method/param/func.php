<?php
class Param {
    function method(): void { echo "outer method\n"; }
}

function some_func($data): void {
    $data -> method();              // line 3
}

function some_func2(Param $data) {
    $data -> method();              // line 7
}

some_func(new Param()); // line 2
some_func2(new Param()); // line 6

