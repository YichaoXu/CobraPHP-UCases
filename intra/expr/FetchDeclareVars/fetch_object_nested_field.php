<?php
class Person{
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
class Car {
    public $brand;
    public $passenger
    public $year;

    public function __construct($brand, $passenger, $year) {
        $this->brand = $brand;
        $this->passenger = $passenger;
        $this->year = $year;
    }
}

$person1 = new Person("Leo", 23);
$person2 = new Person("Tom", 25);

$car1 = new Car("Toyota", $person1, 2020);
$car2 = new Car("Honda", $person2, 2019);

$firstpassenger = car1->passenger;
$secondpassenger = car2->passenger;
$namefirst = firstpassenger->name;
$namesecond = secondpassenger->name;
echo "$namefirst";
echo "$namesecond";
?>