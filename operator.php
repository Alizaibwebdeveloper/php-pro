<?php
    // PHP Operators
    $x = 10;
    $y = 5;
    echo $x + $y; // outputs 15
    echo "<br>";
    echo $x - $y; // outputs 5
    echo "<br>";
    echo $x * $y; // outputs 50
    echo "<br>";
    echo $x / $y; // outputs 2
    echo "<br>";
    echo $x % $y; // outputs 0

    // Assignment Operators
    echo "<h1>Assignment Operators</h1>";
    echo "<br>";
    $x = 10;
    $x += 5; // $x = $x + 5
    echo $x; // outputs 15

    echo "<br>";
    $x = 10;
    $x -= 5; // $x = $x - 5
    echo $x; // outputs 5

    echo "<br>";
    $x = 10;
    $x *= 5; // $x = $x * 5
    echo $x; // outputs 50

    echo "<br>";
    $x = 10;
    $x /= 5; // $x = $x / 5
    echo $x; // outputs 2

    echo "<br>";
    $x = 10;
    $x %= 5; // $x = $x % 5
    echo $x; // outputs 0

    // Comparison Operators
    echo "<h1>Comparison Operators</h1>";
    echo "<br>";
    $x = 10;
    $y = 5;
    echo ($x == $y); // outputs false
    echo "<br>";
    echo ($x != $y); // outputs true
    echo "<br>";
    echo ($x > $y); // outputs true
    echo "<br>";
    echo ($x < $y); // outputs false
    echo "<br>";
    echo ($x >= $y); // outputs true
    echo "<br>";
    echo ($x <= $y); // outputs false

    // Increment/Decrement Operators
    echo "<h1>Increment/Decrement Operators</h1>";
    echo "<br>";
    $x = 10;
    echo ++$x; // outputs 11
    echo "<br>";
    echo $x++; // outputs 11
    echo "<br>";
    echo --$x; // outputs 10
    echo "<br>";
    echo $x--; // outputs 10

    // Logical Operators
    echo "<h1>Logical Operators</h1>";
    echo "<br>";
    $x = 10;
    $y = 5;
    echo ($x > 5 && $y < 10); // outputs true
    echo "<br>";
    echo ($x > 5 || $y < 10); // outputs true
    echo "<br>";
    echo !($x > 5 && $y < 10); // outputs false
    echo "<br>";
    
    // String Operators

    echo "<h1>String Operators</h1>";
    echo "<br>";
    $x = "Hello";
    $y = "World";
    echo $x . " " . $y; // outputs Hello World  

    // Array Operators
    echo "<h1>Array Operators</h1>";
    echo "<br>";
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    print_r($x + $y); // Union of $x and $y
    echo "<br>";
    print_r($x == $y); // Equality
    echo "<br>";
    print_r($x === $y); // Identity
    echo "<br>";
    print_r($x != $y); // Inequality
    echo "<br>";
    print_r($x <> $y); // Inequality
    echo "<br>";
    print_r($x !== $y); // Non-identity

    // php conditional operator

    echo "<h1>Conditional Operators</h1>";
    echo "<br>";
    $x = 10;
    $y = ($x > 5) ? "Greater than 5" : "Less than or equal to 5";
    echo $y; // outputs Greater than 5
    echo "<br>";
    
    



?>