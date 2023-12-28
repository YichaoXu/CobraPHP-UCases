<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$multiArr = array(array(1, new Container()), array("a", "b"));
$multiArr[0][1] -> echo_info();

