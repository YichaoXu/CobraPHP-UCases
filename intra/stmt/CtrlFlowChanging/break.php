<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$b = null;

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
    	$b = new Vulnerable();
        break;
    }
    $b = new Safe();
}

$b -> suspect();


?>