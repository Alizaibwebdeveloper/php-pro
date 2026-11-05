<?php
    // php - if statement
    $x = 10;    
    if ($x > 5) {
        echo "<h1>php if statement</h1>";
        echo "Greater than 5";
    } else {
        echo "Less than or equal to 5";
    }


    // if statement with elseif
    echo "<br>";
    $x = 10;
    if ($x > 10) {
        echo "<h1>php if statement with elseif</h1>";
        echo "Greater than 10";
    } elseif ($x == 10) {
        echo "Equal to 10";
    } else {
        echo "Less than 10";
    }

    $t = date("H");
    if ($t < "20") {
        echo "<h1>php if statement with elseif</h1>";
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }


    // php shorthand if statement

    echo "<br>";
    $x = 10;
    if ($x > 5) echo "<h1>php shorthand if statement</h1>"; echo "Greater than 5";

    // nested if statement
    echo "<br>";
    $x = 10;
    if ($x > 5) {
        echo "<h1>php nested if statement</h1>";
        if ($x < 15) {
            echo "Greater than 5 and less than 15";
        }
    }
    
?>