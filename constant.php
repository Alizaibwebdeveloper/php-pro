<?php
    // php constant is a name or an identifier for a simple value. The value cannot be changed during the script. A constant is an identifier (name) for a simple value. The value cannot be changed during the script. A constant name starts with a letter or underscore, followed by any number of letters, numbers, or underscores. By convention, constant identifiers are always uppercase.
    define("PI", 3.14159);
    echo PI;
echo "<br>";
    define ("GREETING", "Welcome to PHP!");
    echo GREETING;

    // Constants are global and can be used across the entire script.

    // Constant can be define inside a function, but they can only be accessed outside the function if they are defined as global constants.

    echo "<h1>Php constant inside function</h1>";

    function myTest() {
        define("FOO", "BAR");
    }
    myTest();
    echo "<br>";
    echo FOO; // outputs BAR

    // php constant  is also  defined using the const keyword. const is defined at compile time, while define() is defined at runtime. const can be used to define constants in classes, while define() cannot.


    echo "<h1>Php constant using const keyword</h1>";
    const GREETING1 = "Welcome to PHP!";
    echo GREETING1;

    // Array constants can be defined using the define() function. Array constants are available since PHP 5.6.
    define("COLORS", ["red", "green", "blue"]);
    echo "<br>";
    echo COLORS[0]; // outputs red

    // Magic constants are predefined constants in PHP that change depending on where they are used. They are case-sensitive and start and end with double underscores (__). Some of the magic constants are:
    echo "<h1>Php magic constants</h1>";
    echo __LINE__; // outputs the current line number   

    echo "<br>";
    echo __FILE__; // outputs the full path and filename of the file

    echo "<br>";
    echo __DIR__; // outputs the directory of the file

    echo "<br>";
    function myFunction() {
        echo __FUNCTION__; // outputs the function name
    }
    myFunction();
    echo __FUNCTION__; // outputs the function name

    
?>