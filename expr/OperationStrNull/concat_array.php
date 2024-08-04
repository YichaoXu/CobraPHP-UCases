<?php

class ContainerClass
{
    function ContainerClass()
    {
        echo "CONTAINER_INFO";
    }
}

$a = "Container";
$b = $a . "Class";
$index_arr = array("", ...[new $b()]);
$index_arr[1]->$b();
