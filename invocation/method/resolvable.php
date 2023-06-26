<?php

class NewClass{
    function method(): void {echo "inside of method\n";}
}

$data = new NewClass();
$data -> method(); // line 4
