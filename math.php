<?php
    
    echo(pi());
 echo "<br>";
    echo(min(0,34,-4,54));

    echo "<br>";
    echo(max(0,34,-4,54));

    // The absolute value of a number can be found with the abs() function:
    echo "<br>";
    echo(abs(-6.7));

    // The square root of a number can be found with the sqrt() function:
    echo "<br>";

    echo (sqrt(64));

    // The round() function rounds a floating-point number to its nearest integer:
    echo "<br>";
    echo "<h1>Php round function</h1>";
    echo (round(0.60));
    echo "<br>";
    echo (round(0.49));

    echo "<br>";
    echo "<h1>Php random function</h1>";
    echo(rand());
    // specify a minimum and maximum number to generate a random number between the two specified numbers:
    echo "<br>";
    echo(rand(10,100));
?>