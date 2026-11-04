<?php
    // php data types
    // varible can store data of different types, and different data types can do different things.

    $x = 5; // integer
    $y = 10.5; // float
    $z = "Hello, World!"; // string
    $a = true; // boolean
    $cars = array("Volvo", "BMW", "Toyota"); // array
    $null = null; // null
    // object data type

    class Car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }

        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar =   new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    echo gettype($myCar);

    $testnull = null;
    echo "<br>";
    echo gettype($testnull);
?>