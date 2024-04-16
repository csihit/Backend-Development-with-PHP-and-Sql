<?php
    // businessdb
    $dbserver = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "login_info";
    
    $conn = mysqli_connect($dbserver, $db_user, $db_pass, $db_name);
    /*try {
        $conn = mysqli_connect($dbserver, $db_user, $db_pass, $db_name);
        // $conn = mysqli_connect("localhost", "root", "", "businessdb");
        echo "Database connection established successfully";
    }
    catch (mysqli_sql_exception) {
        echo "Connection failed";
    }*/
    
    // if($conn) {
    //     echo "Connection established successfully";
    // }


?>
