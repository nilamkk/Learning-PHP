<?php

// 1. Main data types are: String,  Integer,   Float,   Boolean,    Array,    Object,    NULL,   Resource


// Strings
$x = "Hello world!";




// Integer
$x = 5985;
var_dump($x);
echo "<br>";
echo "<br>";




// Float
$x = 10.365;
var_dump($x);
echo "<br>";
echo "<br>";





// Boolean
$x = true;
echo "<br>";
echo "<br>";






// Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>";





// NULL
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";
echo "<br>";






// Objects
class Car {

    // data members in class
    public $color;
    public $model;

    // constructor in php
    public function __construct($color, $model) {
        // use of this
        $this->color = $color;
        $this->model = $model;
    }

    // member function
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

// Object creation  
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";

$myCar = new Car("red", "Toyota");
echo $myCar -> message();

?>