<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

function dosomething(&$n)
{
    echo "$n->name";
    echo "$n->age";
    return $n;
}

$Person1 = new Person("Johns", 23);
$Person2 = &$Person1;
$Person3 = dosomething($Person2);

echo "$Person3->name";
echo "$Person3->age";

?>