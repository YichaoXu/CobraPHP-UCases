<?php

class ContainerClass
{
    function ContainerClass()
    {
        echo "CONTAINER_INFO";
    }
}

$a = "Container";
$a .= "Class";
$index_arr = array("", ...[new $a()]);
$index_arr[1]->$a();
