<?php

class Safe
{
    function suspect()
    {
        echo "SAFE";
    }
}

class Vulnerable
{
    function suspect()
    {
        echo $_GET["user_input"];
    }
}

$user_input = new Safe();
$b = 0;

$numbers = range(1, 10);

// Iterate through the array using foreach loop
foreach ($numbers as $number) {
    $b += $number;
}

if ($b == 55) {
    $user_input = new Vulnerable();
}

$user_input->suspect();

?>