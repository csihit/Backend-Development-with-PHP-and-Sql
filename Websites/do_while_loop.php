<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-While Loop Example</title>
</head>
<body>
    <h2>Do-While Loop Example</h2>
    <ul>
    <?php
    $i = 1;
    do {
        echo "<li>Item $i</li>";
        $i++;
    } while ($i <= 5);
    ?>
    </ul>
</body>
</html>
