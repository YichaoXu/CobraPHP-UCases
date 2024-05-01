<?php
class ContainerClass {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$a = "Container";
$b = $a."Class";
$container = new $b();
$container -> echo_info();
?>
