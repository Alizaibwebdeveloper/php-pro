<?php
    echo "I am ali zaib a pro php developer!";
    $name = "Ali zaib";

    echo "Hello, " . $name . "!";


    $city = 'Faisalabad';
    echo "<br>";
    echo 'I live in $city ';

    echo "<br>";

    echo strlen($name);

    $text = "Hello world!";
    echo "<br>";

echo var_dump(str_contains($text, "world"));

echo "<br>";

echo strpos($text, "world");

$text1 = "I really love programming in PHP!";
echo "<br>";

echo var_dump(str_starts_with($text1, "i really"));

// Modifying the string

/* php has many built-in functions to modify the string. Some of them are:
    */

    $city_oF_light = "karachi";
    echo "<br>";
    echo strtoupper($city_oF_light);

    $sample_text = "I am a php developer";
    echo "<br>";
    echo str_replace("php", "Python", $sample_text);

    $string_reverse = "Hello world!";
    echo "<br>";
    echo strrev($string_reverse);

    // concetination of string
    $first_name = "Ali";

    $last_name = "Zaib";

    echo "<br>";
    echo $first_name . " " . $last_name;

    $x = "Hello";
    $y = "World";
    echo "<br>";
    echo "$x  $y";

    // slicing of string
    $string_slice = "Hello world!";

    echo "<br>";
    echo substr($string_slice, 0, 5);

    

?>