<?php

// En abstrakt klass som definierar en fordonstyp
abstract class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    abstract public function start();
    abstract public function stop();
}

// En klass som ärver från Vehicle och representerar en bil
class Car extends Vehicle {
    public function start() {
        return "Starta bilen...";
    }

    public function stop() {
        return "Stoppa bilen...";
    }
}

// En annan klass som ärver från Vehicle och representerar en motorcykel
class Motorcycle extends Vehicle {
    public function start() {
        return "Starta motorcykeln...";
    }

    public function stop() {
        return "Stoppa motorcykeln...";
    }
}

// Skapa en instans av bilen
$car = new Car("Toyota");
echo $car->start() . "<br>";
echo $car->stop() . "<br>";

// Skapa en instans av motorcykeln
$motorcycle = new Motorcycle("Harley Davidson");
echo $motorcycle->start() . "<br>";
echo $motorcycle->stop() . "<br>";

// Skapa en instans av bilen HANI 
$car = new Car("Toyota");
echo $car->start() . "<br>";
echo $car->stop() . "<br>";
?>
