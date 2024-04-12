<!DOCTYPE html>
<html>
<head>
    <title>Password Hashing Example</title>
</head>
<body>
    <h1>Password Hashing Example</h1>
    <form method="POST" action="password_hashing.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Hash Password">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Hash the password using bcrypt algorithm
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        echo "<h2>Your Credentials:</h2>";
        echo "Username: $username<br>";
        echo "Hashed Password: $hashedPassword<br>";
    }
    ?>
</body>
</html>
