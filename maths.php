<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maths Functions In PHP</title>
</head>
<body>
    <form action="maths.php" method="POST">
        <label>X :: </label>
        <input type="text" name="x">
        <label>Y :: </label>
        <input type="text" name="y">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
    $x = $_POST['x'];
    $y = $_POST['y'];


    // Absolute value
    echo "Absolute value :: " . "<br>";
    echo abs($x) . "<br>";  // Outputs: 10.5

    // Round and ceiling
    echo "Round and ceiling :: " . "<br>";
    echo round($x) . "<br>";  // Outputs: -10
    echo ceil($x) . "<br>";   // Outputs: -10

    // Exponential and logarithmic
    echo "Exponential and logarithmic :: " . "<br>";
    echo pow($y, 2) . "<br>";  // Outputs: 49
    echo sqrt($y) . "<br>";    // Outputs: 2.6457513110646
    echo log($y) . "<br>";     // Outputs: 1.9459101490553

    // Trigonometric functions
    echo "Trigonometric functions :: " . "<br>";
    echo sin($x) . "<br>";     // Outputs: 0.97263006724243
    echo cos($x) . "<br>";     // Outputs: 0.23295515000632
    echo tan($x) . "<br>";     // Outputs: -4.1812193701771

    // Random number
    echo "Random number :: " . "<br>";
    echo rand(1, 10) . "\n";  // Outputs a random integer between 1 and 10

?>