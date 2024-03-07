<?php

class Safe{
    function suspect(){ echo "SAFE"; }
}

class Vulnerable {
    function suspect() { echo $_GET["user_input"]; }
}

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3 * $this->radius * $this->radius; 
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate_area() {
        return $this->width * $this->height; 
    }
}

function get_area(Shape $shape) {
    return $shape->calculateArea();
}

$test = null;
$circle = new Circle(5);
$b = get_area(circle);
if($b == 75) {
    $test = new Safe();
    $test -> suspect();
}

$rec = new Rectangle(5, 5);
$b = get_area(circle);
if($b == 25) {
    $test = new Vulnerable();
    $test -> suspect();
}


?>