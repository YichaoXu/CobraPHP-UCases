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

$i = 1;
$b = 0;


while ($i <= 10) {
    $b += $i;
    $i++;
}

if ($b == 55) {
    $user_input = new Vulnerable();
}

$user_input->suspect();

?>