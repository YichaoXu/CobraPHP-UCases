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

$car1brand = $car1->brand;
$car2brand = $car2->brand;
echo "Car1 brand: $car1brand";
echo "Car2 brand: $car2brand";
?>