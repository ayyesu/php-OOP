<?php

interface ShapeInterface {
    public function calculateArea();
}

abstract class Shape implements ShapeInterface {
    protected $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;

    public function setRadius($radius) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function setLength($length) {
        $this->length = $length;
    }

    public function setWidth($width) {
        $this->width = $width;
    }

    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Usage example

$circle = new Circle();
$circle->setName("Circle");
$circle->setRadius(5);

$rectangle = new Rectangle();
$rectangle->setName("Rectangle");
$rectangle->setLength(10);
$rectangle->setWidth(5);

echo $circle->getName() . " area: " . $circle->calculateArea() . "\n";
echo $rectangle->getName() . " area: " . $rectangle->calculateArea() . "\n";

?>
