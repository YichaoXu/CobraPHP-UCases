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

for ($i = 1; $i <= 10; $i++) {
    $b += $i;
}

if ($b == 55) {
    $user_input = new Vulnerable();
}

$user_input->suspect();

?>