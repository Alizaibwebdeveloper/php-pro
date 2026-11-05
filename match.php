<?php
    // match statement is a new feature in PHP 8.0 that allows you to perform pattern matching on values. It is similar to a switch statement, but it is more powerful and flexible.

    echo "<h1>php match statement</h1>";

    $favoriteColor = "red";
    $result = match ($favoriteColor) {
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        default => "You have a unique favorite color!",
    };
    echo $result;


    // Match multiple values

    echo "<br>";
    echo "<h1>php match statement with multiple values</h1>";
    $favoriteColor = "blue";
    $result = match ($favoriteColor) {
        "red", "blue" => "Your favorite color is either red or blue!",
        "green" => "Your favorite color is green!",
        default => "You have a unique favorite color!",
    };
    echo $result; 


    // Default case
    echo "<br>";
    echo "<h1>php match statement with default case</h1>";
    $favoriteColor = "yellow";
    $result = match ($favoriteColor) {
        "red" => "Your favorite color is red!",
        "blue" => "Your favorite color is blue!",
        "green" => "Your favorite color is green!",
        default => "You have a unique favorite color!",
    };
    echo $result;
?>