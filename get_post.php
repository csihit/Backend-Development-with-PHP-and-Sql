<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET And POST in PHP</title>
</head>
<body>

    <!-- GET Method -->
    <h2>GET Method</h2>
    <form action="get_post.php" method="GET">
        <label>Username :: </label>
        <input type="text" name="username"><br>

        <label>Password :: </label>
        <input type="password" name="password"><br>

        <input type="submit" value="GET Login">
    </form>


    <!-- POST Method -->
    <br><br>
    <h2>POST Method</h2>
    <form action="get_post.php" method="POST">
        <label>Username :: </label>
        <input type="text" name="username1"><br>

        <label>Password :: </label>
        <input type="password" name="password1"><br>

        <input type="submit" value="POST Login">
    </form>

</body>
</html>

<?php

    // GET Method
    echo $_GET["username"]. "<br>";
    echo $_GET["password"]. "<br>";

    // POST Method
    echo $_POST["username1"]. "<br>";
    echo $_POST["password1"]. "<br>";


?>