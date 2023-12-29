<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}


$index_arr = array(new Container(), "");
$index_arr[0] -> echo_info();
$index_arr[1] = new Container();
$index_arr[1] -> echo_info();
