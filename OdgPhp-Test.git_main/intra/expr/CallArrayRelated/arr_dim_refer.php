<?php
class Container {
    function echo_info() { echo "CONTAINER_INFO"; }
}

$multiArr = array(array(1, 2), array("a", "b"));
$ref =& $multiArr[0][1];
$ref = new Container();
$multiArr[0][1] -> echo_info();

