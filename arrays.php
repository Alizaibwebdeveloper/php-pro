<?php
    // Arrays in php are used to store multiple values in a single variable.

    $fruits = array("Apple", "Banana", "Orange");
    echo $fruits[0] . "<br>"; // Output: Apple
    echo $fruits[1] . "<br>"; // Output: Banana
    echo $fruits[2] . "<br>"; // Output: Orange


    // changing array values
    $fruits[1] = "Mango";
    echo $fruits[1] . "<br>"; // Output: Mango

 echo var_dump($fruits); // Output: array(3) { [0]=> string(5) "Apple" [1]=> string(5) "Mango" [2]=> string(6) "Orange" }

    // Associative arrays
    $person = array("name" => "John", "age" => 30, "city" => "New York");
    echo $person["name"] . "<br>"; // Output: John
    echo $person["age"] . "<br>"; // Output: 30
    echo $person["city"] . "<br>"; // Output: New York

    // changing associative array values
    $person["age"] = 31;
    echo $person["age"] . "<br>"; // Output: 31

    // looop through an associative array
    foreach($person as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

    // create array using the array() function
    $colors = array("Red", "Green", "Blue");

    echo $colors[0] . "<br>"; // Output: Red

    // create array using the short array syntax
    $numbers = [1, 2, 3, 4, 5];
    echo $numbers[0] . "<br>"; // Output: 1

    // Empty arrays
    $emptyArray = array();
    $emptyArray2 = [];
    echo var_dump($emptyArray); // Output: array(0) { }
    echo var_dump($emptyArray2); // Output: array(0) { }

    // Multidimensional arrays
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    // the unset() function is used to remove an element from an array.
    unset($cars[0][1]); // removes the value 22 from the first array
    echo "<br>";
     echo "<pre>";
    echo var_dump($cars); /* Output: array(4) { [0]=> array(2) { [0]=> string(5) "Volvo" [2]=> string(2) "18" } [1]=> array(3) { [0]=> string(3) "BMW" [1]=> string(2) "15" [2]=> string(2) "13" } [2]=> array(3) { [0]=> string(4) "Saab" [1]=> string(1) "5" [2]=> string(1) "2" } [3]=> array(3) { [0]=> string(10) "Land Rover" [1]=> string(2) "17" [2]=> string(2) "15" } } */
 echo "</pre>";
 // php array pop() function is used to remove the last element from an array.
    array_pop($cars[1]); // removes the value 13 from the second array
    echo "<br>";
    echo "<pre>";
    echo var_dump($cars); /* Output: array(4) { [0]=> array(2) { [0]=> string(5) "Volvo" [2]=> string(2) "18" } [1]=> array(2) { [0]=> string(3) "BMW" [1]=> string(2) "15" } [2]=> array(3) { [0]=> string(4) "Saab" [1]=> string(1) "5" [2]=> string(1) "2" } [3]=> array(3) { [0]=> string(10) "Land Rover" [1]=> string(2) "17" [2]=> string(2) "15" } } */
    echo "</pre>";
    // php array shift() function is used to remove the first element from an array.

    // php array sort function is used to sort an array in ascending order.
    sort($numbers);
    echo "<br>";
    echo "<pre>";
    echo var_dump($numbers); /* Output: array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) } */
    echo "</pre>";

    // rosrt
    rsort($numbers);
    echo "<br>";
    print_r(array_column($cars , 0)); /* Output: array(4) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(4) "Saab" [3]=> string(10) "Land Rover" } */

?>