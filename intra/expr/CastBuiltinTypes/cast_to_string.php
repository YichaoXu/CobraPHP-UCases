<?php
$intValue = 10;

$stringValue1 = (string)$intValue;

$stringValue2 = $intValue . '';

echo "(string) cast: $stringValue1\n"; 
echo "Concatenation with empty string: $stringValue2\n"; 
?>