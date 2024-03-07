<?php
function divide($dividend, $divisor) {
    return $dividend / $divisor;
}

$result = @divide(10, 0); 

echo "Result: " . $result; 

?>