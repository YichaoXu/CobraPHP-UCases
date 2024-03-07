<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

$user_input = new Safe();

function dosomething(Safe: $a) {
	$a -> suspect()
	$a = new Vulnerable();
	$a - > suspect();
	return $a;
}
$b = dosomething($user_input);
$b -> suspect();

?>