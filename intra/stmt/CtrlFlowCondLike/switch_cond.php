<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

class Half {
    function suspect() { echo "Half"; }
}

function dosomething($a) {
	$user_input = new Safe();
	switch ($a) {
    case 1:
        $user_input = new Vulnerable();
        break;
    case 2:
        $user_input = new Half();
        break;
    default:
        $user_input = new Safe();
	}
	return $user_input
}

$b = dosomething(1);
$b -> suspect();

$c = dosomething(2);
$c -> suspect();

$d = dosomething(3);
$d -> suspect();


?>