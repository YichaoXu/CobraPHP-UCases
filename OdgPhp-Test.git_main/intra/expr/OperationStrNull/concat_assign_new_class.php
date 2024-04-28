<?php
class ContainerClass {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$a = "Container";
$a .= "Class";
$container = new $a();
$container -> echo_info();
?>