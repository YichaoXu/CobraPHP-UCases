<?php

class SpecialException extends Exception
{
}

try {
    echo "In Try";
    throw new SpecialException("Error occurred");
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
} finally {
    echo "In Finally";
}