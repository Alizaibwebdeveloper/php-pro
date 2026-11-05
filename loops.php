<?php
    // loops are used to execute a block of code repeatedly as long as a specified condition is true. There are several types of loops in PHP, including for, while, do-while, and foreach loops.

    echo "<h1>while  loop</h1>";
    $i = 1;
    while ($i <= 5) {
        echo "The number is: $i <br>";
        $i++;
    }
    // break statement is used to exit a loop prematurely when a certain condition is met. It can be used in any type of loop, including for, while, and do-while loops.
    echo "<h1>break statement</h1>";
    $i = 1;
    while ($i <= 10) {
        if ($i == 5) {
            break;
        }
        echo "The number is: $i <br>";
        $i++;
    }

    // continue statement is used to skip the current iteration of a loop and move on to the next iteration. It can be used in any type of loop, including for, while, and do-while loops.
    echo "<h1>continue statement</h1>";
    $i = 1;
    while ($i <= 10) {
        if ($i == 5) {
            $i++;
            continue;
        }
        echo "The number is: $i <br>";
        $i++;
    }

    // Alternative syntax for while loop is a feature in PHP that allows you to use a different syntax for the while loop. Instead of using curly braces to define the block of code to be executed, you can use a colon and an endwhile statement.
    echo "<h1>Alternative syntax for while loop</h1>"; 
    $i = 1;
    while ($i <= 10):
        echo "The number is: $i <br>";
        $i++;
    endwhile;

    // do-while loop is similar to a while loop, but it guarantees that the block of code will be executed at least once, even if the condition is false. The condition is checked after the block of code is executed.
    echo "<h1>do-while loop</h1>";
    $i = 8;
    do {
        echo "The number is: $i <br>";
        $i++;
    } while ($i <= 5);
   

    //for loop is used to execute a block of code a specific number of times. It consists of three parts: the initialization, the condition, and the increment/decrement. The initialization is executed only once at the beginning of the loop, the condition is checked before each iteration, and the increment/decrement is executed after each iteration.
    echo "<h1>for loop</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo "The number is: $i <br>";
    }

    echo "<h1>for loop with decrement</h1>";
    $i=10;
    for($i=10; $i>=1; $i--){
        echo "The number is: $i <br>";
    }

    // loop by step 10

    $i= 0;
    echo "<h1>for loop with step 10</h1>";
    for ($i=0; $i<=100; $i+=10){
        echo "The number is $i <br>";
    }

    // foreach loop is used to iterate over arrays and objects. It allows you to access each element of the array or object without having to use a counter variable. The syntax for a foreach loop is as follows:
    echo "<h1>foreach loop</h1>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo " The color is :$value <br>";
    }

    // foreach loop with key-value pairs

    echo "<h1>foreach loop with key-value pairs</h1>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
        echo "$x = $val <br>";
    }

    // foreach loop on objects
    echo "<h1>foreach loop on objects</h1>";
    class Car {
        public $color;
        public $model;

        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $car1 = new Car("red", "Toyota");
    $car2 = new Car("blue", "Honda");
    $car3 = new Car("green", "Ford");

    $cars = array($car1, $car2, $car3);
    foreach ($cars as $car) {
        echo "The car is a {$car->color} {$car->model} <br>";
    }

    // foreach loop Byref
    echo "<h1>foreach loop Byref</h1>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        $value = strtoupper($value);
    }
    print_r($colors);

    // Alternative syntax for foreach loop is a feature in PHP that allows you to use a different syntax for the foreach loop. Instead of using curly braces to define the block of code to be executed, you can use a colon and an endforeach statement.
    echo "<h1>Alternative syntax for foreach loop</h1>";
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value):
        echo " The color is :$value <br>";  
    endforeach;
?>
