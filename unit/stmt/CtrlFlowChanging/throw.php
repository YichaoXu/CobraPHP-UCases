<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$b = new Safe();

function dosomething() {
	throw new Exception("Exception.");
}

try {
	dosomething();
} catch (Exception $e) {
	$b = new Vulnerable();
}

$b -> suspect();

?>