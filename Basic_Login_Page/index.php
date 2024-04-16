<?php
    include("database.php");


?>

<!-- ------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h1>Welcome to Computer Society Of India</h1>
        <label>Username :: </label>
        <input type="text" name="username"> <br><br>
        <label>Password :: </label>
        <input type="password" name="password"> <br><br>
        <input type="submit" name="submit" value="Log In">

    </form>
</body>
</html>

<!-- ------------------------------------------ -->

<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
        // $password = filter_input(INPUT_POST, "password",FILTER_SANITIZE_SPECIAL_CHARS);

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)) {
            echo "Please enter your username";
        }
        elseif(empty($password)) {
            echo "Please enter your password";
        }
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (user, password) VALUES ('$username', '$hash')";
            mysqli_query($conn, $sql);
            echo "You are now registered successfully in Computer Society Of India";
        }
    }


    mysqli_close($conn);
?>