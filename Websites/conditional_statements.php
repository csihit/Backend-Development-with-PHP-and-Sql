<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Checker</title>
</head>
<body>
    <h2>Enter Your Age</h2>
    <form action="conditional_statements.php" method="post">
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if age is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = isset($_POST['age']) ? intval($_POST['age']) : 0;

        // Check age range and display message accordingly
        if ($age >= 18 && $age <= 65) {
            echo "<h2>Welcome, Adult!</h2>";
        } elseif ($age > 65 && $age <= 119) {
            echo "<h2>Welcome, Senior Citizen!</h2>";
        } elseif ($age >= 120) {
            echo "<h2>Welcome, Dead Person!</h2>";
        } else {
            echo "<h2>Sorry, You are Underage!</h2>";
        }
    }
    ?>
</body>
</html>
