<?php
class Param {
    function method(): void { echo "outer method\n"; }
}

function some_func($data): void {
    $data -> method();              // line 3
}

some_func(new Param());             // line 2

