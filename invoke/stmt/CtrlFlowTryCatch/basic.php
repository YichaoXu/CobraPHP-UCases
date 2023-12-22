<?php


try {
    throw new Exception("Error occurred");
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
}
