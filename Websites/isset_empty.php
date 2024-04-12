<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() and empty()</title>
</head>
<body>
    <form action="isset_empty.php" method="post">
        <label>username: </label>
        <input type="text" name="username"><br>
        <label>password: </label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>
</html>

<?php
/*
    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
*/
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username) || empty($password)) {
            echo "Please enter username and password";
        }

        else {
            echo "Hello {$username}";
        }
    } 

?>


