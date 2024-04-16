<?php
    $conn = mysqli_connect("localhost","root", "", "crud_operations");
    if(!$conn) {
        die(mysqli_connect_error($conn));
    }


?>