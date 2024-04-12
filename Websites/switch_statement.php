<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month Checker</title>
</head>
<body>
    <h2>Enter a Month Number</h2>
    <form action="switch_statement.php" method="post">
        <label for="month">Month Number:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if month is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $month = isset($_POST['month']) ? intval($_POST['month']) : 0;

        // Using switch statement to display month name based on month number
        switch ($month) {
            case 1:
                echo "<h2>January</h2>";
                break;
            case 2:
                echo "<h2>February</h2>";
                break;
            case 3:
                echo "<h2>March</h2>";
                break;
            case 4:
                echo "<h2>April</h2>";
                break;
            case 5:
                echo "<h2>May</h2>";
                break;
            case 6:
                echo "<h2>June</h2>";
                break;
            case 7:
                echo "<h2>July</h2>";
                break;
            case 8:
                echo "<h2>August</h2>";
                break;
            case 9:
                echo "<h2>September</h2>";
                break;
            case 10:
                echo "<h2>October</h2>";
                break;
            case 11:
                echo "<h2>November</h2>";
                break;
            case 12:
                echo "<h2>December</h2>";
                break;
            default:
                echo "<h2>Invalid Month Number!</h2>";
        }
    }
    ?>
</body>
</html>
