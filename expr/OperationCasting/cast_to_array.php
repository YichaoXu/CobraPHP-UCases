<?php
$objectValue = (object)array('name' => 'John', 'age' => 30);

$arrayValue = (array)$objectValue;

echo "Array representation: ";
var_dump($arrayValue);
?>