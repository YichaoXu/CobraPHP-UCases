<?php

class Inner {
    function method(): void {echo "inner method\n";}
}

function some_func($data){
    $data -> method(); // line 4
}

some_func(new Inner()); // line 7
