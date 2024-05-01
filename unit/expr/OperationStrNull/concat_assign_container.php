<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$container = new Container();
$a = "echo_";
$a .= "info";
$container -> $a();
?>
