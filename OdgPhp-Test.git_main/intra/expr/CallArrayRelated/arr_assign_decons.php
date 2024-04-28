<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$index_arr = array("", new Container());
[$a_brace, $b_brace] = $index_arr;
$b_brace -> echo_info();

list($a_list, $b_list) = $index_arr;
$b_list -> echo_info();

