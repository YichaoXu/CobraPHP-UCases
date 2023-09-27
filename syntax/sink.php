<?php

function some_source(): string {
    return "tainted";
}
function some_sink(string $input){ echo $input; }

$data = some_source();
some_sink($data);

