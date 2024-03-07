<?php

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

enum Calculation: Shape {
    case round: new Circle(5);
    case other: new Rectangle(5, 5);
}
$a = (Calculation::round) ->value;
$b = (Calculation::other) ->value;

$a -> calculate_area();
$b -> calculate_area();


?>