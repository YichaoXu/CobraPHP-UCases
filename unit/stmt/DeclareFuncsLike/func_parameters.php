<?php

class Person
{

    public function greeting()
    {
        echo "Hello world \n";
    }
}

function dosomething(Person $p)
{
    $p->greeting();
}

?>