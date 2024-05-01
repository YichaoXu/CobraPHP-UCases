<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$b = null;


$b = new Vulnerable();
$b -> suspect();

goto end;

$b = new Safe();
$b -> suspect();

end:
$b -> suspect();

?>