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

$b = new Safe();

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    if ($i == 5) {
        $b = new Vulnerable();
    }
}

$b->suspect();


?>