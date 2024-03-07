<?php
function divide($dividend, $divisor) {
    if ($divisor == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $dividend / $divisor;
}

$result = divide(10, 0); 
echo "Result: " . $result;

?>