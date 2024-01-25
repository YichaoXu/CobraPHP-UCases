<?php

class Vulnerable {
    function __invoke() { echo $_GET["user_input"]; }
}

$user_input = new Vulnerable();
$user_input();


