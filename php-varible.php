<?php
$x = 5;

function myTest() {
$x = 5;


    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";

// local scope variable

function myTest2() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest2();

echo "<p>Variable x outside function is: $x</p>";

// static variable
function myTest3() {
    static $x = 0;
    echo "<p>Variable x inside function is: $x</p>";
    $x++;
}

myTest3();
myTest3();
myTest3();