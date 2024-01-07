<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}


$index_arr = array("a" => new Container(), "b" => "");
$index_arr["a"] -> echo_info();
$index_arr["b"] = new Container();
$index_arr["b"] -> echo_info();
