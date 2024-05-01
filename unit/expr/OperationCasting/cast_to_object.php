<?php
$arrayValue = array('name' => 'John', 'age' => 30);

$objectValue = (object)$arrayValue;

echo "Object representation: ";
var_dump($objectValue); 
?>