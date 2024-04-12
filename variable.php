<?php
    // variable = It is a reusable container that holds data
    $name = "Computer Society of India";    // $name is how you declare a variable in PHP
    echo $name;     // String
    echo "<br>It is a string literal that represents {$name}<br>";

    // Data Types::
        /* 
        Integers- whole numbers like 23, 1254, 964 etc 
        Float / Double- floating-point numbers like 46.2, 733.21 etc 
        Booleans- only two possible values, true or false 
        Strings- set of characters, like Web Code Geeks 
        Arrays- named and indexed collections of other values 
        */

    $stringDT = "PHP and MySQL Workshops"; // String
    echo gettype($stringDT)."<br>";

    $intDT = 1965; // Integer
    echo $intDT." -> ".gettype($intDT)."<br>";

    $floatDT = 1.15; // Float
    echo $floatDT." -> ".gettype($floatDT)."<br>";

    $boolDT = true; // Boolean
    echo $boolDT." -> ".gettype($boolDT)."<br>";

    $arrayDT = array("Pineapple", "Grapefruit", "Banana");
    echo gettype($arrayDT)."<br>";

    //--------------------------------- Array ---------------------------------
    $numbers = array(1, 2, 3, 4, 5);
    $fruits = ['apple', 'banana', 'cherry'];
    $person = array(
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York'
    );

    // Print arrays
    echo "Numbers array:\n";
    print_r($numbers);
    echo "<br>";

    echo "Fruits array:\n";
    print_r($fruits);
    echo "<br>";

    echo "Person array:\n";
    print_r($person);
    echo "<br>";

    // Access individual elements
    echo "Third number: " . $numbers[2] . "<br>";
    echo "Second fruit: " . $fruits[1] . "<br>";
    echo "Name: " . $person['name'] . "<br>";





?>