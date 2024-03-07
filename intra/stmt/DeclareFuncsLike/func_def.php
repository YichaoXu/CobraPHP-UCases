<?php
function greeting() { return; }
class Person {

    public function greeting() {
        echo "Hello world \n"; 
    }
}

function dosomething(Person $p) {
    $p -> greeting();
    return $p;
}

$p = new Person();
$a = dosomething($p);
$a -> greeting();

?>