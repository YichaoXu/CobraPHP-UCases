<?php

function greeting()
{
    return;
}

class Person
{

    public function greeting()
    {
        echo "Hello world \n";
    }
}

$p = new Person();
$p->greeting();

?>