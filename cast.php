<?php
    $a = 234;
    $b = 546.6;
    $c = "34";
    $d = true;
    $e = null;

   $a = (string)$a;
    $b = (string)$b;
    $c = (string)$c;
    $d = (string)$d;
    $e = (string)$e;


    echo var_dump($a);
    echo "<br>";
    echo var_dump($b);
    echo "<br>";
    echo var_dump($c);
    echo "<br>";
    echo var_dump($d);
    echo "<br>";
    echo var_dump($e);
  echo "<br>";
    // convert object in array
 class car {
    public $name;
    public $model;
    public $color;

    function __construct($name, $model, $color) {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
    }

}

$mynewcar = new car("Toyota", "Corolla", "Red");
$mynewcar_array = (array)$mynewcar;

echo var_dump($mynewcar_array);
