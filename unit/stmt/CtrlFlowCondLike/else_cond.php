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

if ($user_input["cond"]) {
    $user_input = new Vulnerable();
    $user_input->suspect();
} else {
    $user_input->suspect();
}

$user_input->suspect();

?>