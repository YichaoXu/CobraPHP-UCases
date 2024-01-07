<?php

try {
    echo "In Try";
    throw new Exception("Error occurred");
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
} finally {
    echo "In Finally";
}
