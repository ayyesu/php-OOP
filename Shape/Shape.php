
<?php

abstract class Shape {
    private $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function calculateArea();

}

    // Circle Class
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

    // Rectangle Class
    class Rectangle extends Shape{
        protected $length;
        protected $width;

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

    // Objects of Circle Class
    $circle = new Circle();
    $circle->setName("Circle");
    $circle->setRadius(5);
    echo "Name: " . $circle->getName() . " Area: " . $circle->calculateArea() . "\n\n";

    $rectangle = new Rectangle();
    $rectangle->setName("Rectangle");
    $rectangle->setLength(5);
    $rectangle->setWidth(6);
    echo "Name: " . $rectangle->getName() . " Area: " . $rectangle->calculateArea();

?>
