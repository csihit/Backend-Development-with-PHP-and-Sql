<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop with Key-Value Pairs Example</title>
</head>
<body>
    <h2>Foreach Loop with Key-Value Pairs Example</h2>
    <ul>
    <?php
    $student_scores = array('Alice' => 85, 'Bob' => 92, 'Charlie' => 78, 'Diana' => 88);
    foreach ($student_scores as $name => $score) {
        echo "<li>$name: $score</li>";
    }
    ?>
    </ul>
</body>
</html>
