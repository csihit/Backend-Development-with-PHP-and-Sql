<?php
    // --------------------------------- Arithmetic Operators ---------------------------------
    $a = 2; $b = 5;
    echo "a = " . $a . " b = " . $b. "<br><br>";

    echo "Arithmetic Operations ::<br>";

    $c = $a + $b;   // Sum
    echo "c = ".$c. "<br>";

    $d = $a - $b;   // Difference
    echo "d = ".$d. "<br>";

    $e = $a * $b;   // Multiplication
    echo "e = ".$e. "<br>";

    $f = $a / $b;   // Division
    echo "f = ".$f. "<br>";

    $g = $b % $a;   // Modulus
    echo "g = ".$g. "<br>";

    $h = $a ** $b;  // Exponent
    echo "h = ".$h. "<br>";
    echo "<br><br>";

    // --------------------------------- Increment / Decrement Operators ---------------------------------
    echo "Increment / Decrement Operations <br><br>";
    $v1 = 2;
    echo "v1 = " . $v1. "<br>";
    echo ++$v1. "<br>";             // Pre Increment

    $v2 = 2;
    echo "v2 = " . $v2. "<br>";
    echo $v2++. "<br>";             // Post Increment
    echo $v2. "<br>";

    $v3 = 2;
    echo "v3 = " . $v3. "<br>";
    echo --$v3. "<br>";             // Pre Decrement

    $v4 = 2;
    echo "v4 = " . $v4. "<br>";
    echo $v4--. "<br>";             // Post Decrement
    echo $v4. "<br>";

    echo "<br><br>";

    // --------------------------------- Comparison Operators ---------------------------------
    echo "Comparison Operators <br><br>";

    // Equal (==)
    $resultEqual = 10 == 10; // true if both sides are equal, false otherwise
    echo $resultEqual ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Identical (===)
    $resultIdentical = 10 === '10'; // true if both sides are equal and of the same type, false otherwise
    echo $resultIdentical ? 'true' : 'false'; // Outputs: false
    echo "<br>";

    // Not Equal (!=)
    $resultNotEqual = 10 != 5; // true if both sides are not equal, false if they are equal
    echo $resultNotEqual ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Not Equal (<>)
    $resultNotEqualAlt = 10 <> 5; // true if both sides are not equal, false if they are equal
    echo $resultNotEqualAlt ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Not Identical (!==)
    $resultNotIdentical = 10 !== '10'; // true if both sides are not equal or of different types, false otherwise
    echo $resultNotIdentical ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Greater Than (>)
    $resultGreaterThan = 10 > 5; // true if left side is greater than right side, false otherwise
    echo $resultGreaterThan ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Less Than (<)
    $resultLessThan = 5 < 10; // true if left side is less than right side, false otherwise
    echo $resultLessThan ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Greater than or Equal To (>=)
    $resultGreaterOrEqual = 10 >= 10; // true if left side is greater than or equal to right side, false otherwise
    echo $resultGreaterOrEqual ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Less than or Equal To (<=)
    $resultLessOrEqual = 5 <= 10; // true if left side is less than or equal to right side, false otherwise
    echo $resultLessOrEqual ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    echo "<br><br>";


    // --------------------------------- Assignment Operators ---------------------------------
    echo "Assignment Operators <br><br>";

    // Basic Assignment (=)
    $basicAssignment = 10;
    echo $basicAssignment; // Outputs: 10
    echo "<br>";

    // Addition (+=)
    $additionAssignment = 5;
    $additionAssignment += 3;
    echo $additionAssignment; // Outputs: 8
    echo "<br>";

    // Subtraction (-=)
    $subtractionAssignment = 10;
    $subtractionAssignment -= 4;
    echo $subtractionAssignment; // Outputs: 6
    echo "<br>";

    // Multiplication (*=)
    $multiplicationAssignment = 3;
    $multiplicationAssignment *= 2;
    echo $multiplicationAssignment; // Outputs: 6
    echo "<br>";

    // Division (/=)
    $divisionAssignment = 10;
    $divisionAssignment /= 2;
    echo $divisionAssignment; // Outputs: 5
    echo "<br>";

    // Modulus (%=)
    $modulusAssignment = 13;
    $modulusAssignment %= 5;
    echo $modulusAssignment; // Outputs: 3
    echo "<br>";

    echo "<br><br>";


    // --------------------------------- Logical Operators ---------------------------------
    echo "Logical Operators <br><br>";

    // And (and)
    $resultAnd = (true and true); // true if both operands are true
    echo $resultAnd ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Or (or)
    $resultOr = (true or false); // true if either operand is true
    echo $resultOr ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Xor (xor)
    $resultXor = (true xor false); // true if either operand is true but not both
    echo $resultXor ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Logical AND (&&)
    $resultLogicalAnd = (true && true); // true if both operands are true
    echo $resultLogicalAnd ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Logical OR (||)
    $resultLogicalOr = (true || false); // true if either operand is true
    echo $resultLogicalOr ? 'true' : 'false'; // Outputs: true
    echo "<br>";

    // Logical NOT (!)
    $resultLogicalNot = !true; // true if operand is not true
    echo $resultLogicalNot ? 'true' : 'false'; // Outputs: false
    echo "<br>";

    echo "<br><br>";


?>