<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions Example</title>
</head>
<body>
    <h1>PHP Array Functions Example</h1>

    <?php
    // Initialize an array
    $numbers = array(1, 2, 3, 4, 5);

    // Display the original array
    echo "<p>Original Array: " . implode(", ", $numbers) . "</p>";

    // Count the number of elements in the array
    $count = count($numbers);
    echo "<p>Number of Elements: $count</p>";

    // Add elements to the end of the array
    array_push($numbers, 6, 7);
    echo "<p>Array after Pushing Elements: " . implode(", ", $numbers) . "</p>";

    // Remove and display the last element
    $lastElement = array_pop($numbers);
    echo "<p>Removed Last Element: $lastElement</p>";

    // Remove and display the first element
    $firstElement = array_shift($numbers);
    echo "<p>Removed First Element: $firstElement</p>";

    // Add elements to the beginning of the array
    array_unshift($numbers, 0, -1);
    echo "<p>Array after Unshifting Elements: " . implode(", ", $numbers) . "</p>";

    // Merge two arrays
    $moreNumbers = array(8, 9, 10);
    $mergedArray = array_merge($numbers, $moreNumbers);
    echo "<p>Merged Array: " . implode(", ", $mergedArray) . "</p>";

    // Extract a slice of the array
    $slice = array_slice($mergedArray, 2, 4);
    echo "<p>Slice of Array: " . implode(", ", $slice) . "</p>";

    // Reverse the order of elements in the array
    $reversedArray = array_reverse($mergedArray);
    echo "<p>Reversed Array: " . implode(", ", $reversedArray) . "</p>";
    ?>
</body>
</html>
