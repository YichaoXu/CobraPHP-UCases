<?php
class SpecialException {
    function getMessage() { return "SPECIAL EXCEPTION"; }
}

try {
    echo "In Try";
    throw new SpecialException("Error occurred");
    throw new Exception("Not reachable");
} catch (SpecialException $e) {
    echo "Exception caught: " . $e->getMessage();
} catch (Exception $e) {
    echo "Exception caught: " . $e->getMessage();
} finally {
    echo "In Finally";
}