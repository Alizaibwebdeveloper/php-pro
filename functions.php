<?php
    // php has 1000 built-in functions, but we can create our own functions to make our code reusable and organized.

    // php built -in functions
    // php funtion syntax
    function functionName($parameter1, $parameter2) {
        // code to be executed
        return value;
    }
    echo "<h1>PHP Functions</h1>";
    function mymessage($name) {
        echo "Hello $name";
    }

    mymessage("John");
    echo "<br>";

    // php function with parameters

    function greet($name, $age) {
        echo "Hello $name, you are $age years old.";
    }

    greet("Alice", 25);
echo "<br>";
    // function with default parameters
    function greetWithDefault($name = "Guest") {
        echo "Hello $name";
    }

    greetWithDefault();
    echo "<br>"; // Output: Hello Guest
    greetWithDefault("Alice"); // Output: Hello Alice
    echo "<br>";

    // function with return value
    function add($a, $b) {
        return $a + $b;
    }
    $result = add(5, 10);
    echo "The sum is: $result";
?>