<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$user_input = new Safe();

if ($user_input["cond"]) {
    $user_input -> suspect();
} else if (true) {
	$user_input = new Vulnerable();
    $user_input -> suspect();
}

$user_input -> suspect();

if ($user_input["cond"]) {
    $user_input -> suspect();
} else if (false) {
	$user_input = new Safe();
    $user_input -> suspect();
}

$user_input -> suspect();

?>