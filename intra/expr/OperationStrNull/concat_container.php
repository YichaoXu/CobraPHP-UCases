<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$container = new Container();
$a = "echo_";
$b = $a."info";
$container -> $b();
?>