<?php

$emptyArray = array();
$emptyObject = (object)array();
if(empty($emptyArray)) {
    echo "EMPTY ARRAY\n";
}

if(empty($emptyObject)) {
    echo "EMPTY OBJECT\n";
}
