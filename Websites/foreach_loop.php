<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop Example</title>
</head>
<body>
    <h2>Foreach Loop Example</h2>
    <ul>
    <?php
    $fruits = array('Apple', 'Banana', 'Orange', 'Grapes');
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    ?>
    </ul>
</body>
</html>
