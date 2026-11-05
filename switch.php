<?php
    $favoriteColor = "red";
    switch ($favoriteColor) {
        case "red":
            echo "<h1>php switch statement</h1>";
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
?>