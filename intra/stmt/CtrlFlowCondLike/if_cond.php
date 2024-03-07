<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$user_input = new Safe();

if (true) {
    $user_input = new Vulnerable();
    $user_input -> suspect();
}

$user_input -> suspect();

if (false) {
    $user_input = new Vulnerable();
    $user_input -> suspect();
}

$user_input -> suspect();

?>