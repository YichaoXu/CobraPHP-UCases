<?php

class Shape {
    public function calculate_area() {
        return 0;
    }

    public function print_name() {
    	echo "The shape is: ";
    }
}

class Rectangle extends Shape {
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

$circle = new Shape();
$rectangle = new Rectangle(4, 6);

$circle -> calculateArea();
$circle -> printName();

$rectangle -> calculateArea();
$rectangle -> printName();

?>