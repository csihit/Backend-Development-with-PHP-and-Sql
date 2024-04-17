<?php
    $con = new mysqli('localhost', 'root', '', 'customcars');
    if(!$con){
        die(mysqli_error($con));
    }
    
?>