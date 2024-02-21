<?php
class Car {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Brand: {$this->brand}, Model: {$this->model}, Year: {$this->year}<br>";
    }
}

$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2019);

$car1year = car1->year;
$car2year = car2->year;
echo "Car1 year: $car1year";
echo "Car2 year: $car2year";
?>