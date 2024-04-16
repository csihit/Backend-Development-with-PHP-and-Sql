<?php
    include 'connect.php';

    $id = $_GET['updateid'];

    $sql = "SELECT * FROM crud WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $mobile = $row['mobile'];
    $email = $row['email'];
    $password = $row['password'];

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "UPDATE crud SET id = $id, name = '$name', mobile = '$mobile', email = '$email', password = '$password' WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if($result) {
            // echo "Data Updated Successfully";
            header("Location:display.php");
        }
        else {
            die(mysqli_error($conn));
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Basic Crud Operations</title>


</head>
<body>
    <h2 class="text-center my-4">CRUD Operations Using PHP</h2>
    <!-- Bootstrap has 2 classes, container and container-fluid.
    container class makes sure that there is equal spacing between elements from the left and right boundaries -->
    <div class="container">
        <form method="POST">
            <div class="form-group mb-3 my-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="<?php echo $name;?>"/>
            </div>

            <div class="form-group mb-3 my-4">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="mobile" value="<?php echo $mobile;?>"/>
            </div>

            <div class="form-group mb-3 my-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?php echo $email;?>"/>
            </div>

            <div class="form-group mb-3 my-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" value="<?php echo $password;?>"/>
            </div>
            
            <button type="submit" class="btn btn-dark" name="submit">Update User Details</button>
        </form>
    </div>

</body>
</html>