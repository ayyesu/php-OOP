<?php

class Vehicle{
    private $make;
    private $model;
    private $year;
    private $color;
    private $engine;

    public function setMake($make){
        $this->make = $make;
    }

    public function setModel($model){
        $this->model = $model;
    }

    public function setYear($year){
        $this->year = $year;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setEngine($engine){
        $this->engine = $engine;
    }

    public function getMake(){
        return $this->make;
    }

    public function getModel(){
        return $this->model;
    }

    public function getYear(){
        return $this->year;
    }

    public function getColor(){
        return $this->color;
    }

    public function getEngine(){
        return $this->engine;
    }
}

class Engine{

    private $type;
    private $displacement;
    private $horsepower;

    public function setType($type){
        $this->type = $type;
    }

    public function setDisplacement($displacement){
        $this->displacement = $displacement;
    }

    public function setHorsepower($horsepower){
        $this->horsepower = $horsepower;
    }

    public function getType(){
        return $this->type;
    }

    public function getDisplacement(){
        return $this->displacement;
    }

    public function getHorsepower(){
        return $this->horsepower;
    }
}

// Create a new instance of the Vehicle class
$vehicle = new Vehicle();

// Set the attributes of the Vehicle instance
$vehicle->setMake("Toyota");
$vehicle->setModel("Camry");
$vehicle->setYear(2020);
$vehicle->setColor("Red");

// Create a new instance of the Engine class
$engine = new Engine();

// Set the attributes of the Engine instance
$engine->setType("Gasoline");
$engine->setDisplacement(2000);
$engine->setHorsepower(160);

// Set the engine attribute of the Vehicle instance to the new Engine instance
$vehicle->setEngine($engine);

// Print out the make, model, year, color, type, displacement, and horsepower of the Vehicle instance
echo "Make: " . $vehicle->getMake() . "\n";
echo "Model: " . $vehicle->getModel() . "\n";
echo "Year: " . $vehicle->getYear() . "\n";
echo "Color: " . $vehicle->getColor() . "\n";
echo "Type: " . $vehicle->getEngine()->getType() . "\n";
echo "Displacement: " . $vehicle->getEngine()->getDisplacement() . "\n";
echo "Horsepower: " . $vehicle->getEngine()->getHorsepower() . "\n";

?>
