<?php
    include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User Data</title>
</head>
<body>

    <h2 class="container text-center mt-4">CRUD Operations Using PHP</h2>

    <div class="container">
        <button class="btn btn-dark my-5"><a href="user.php" class="text-light">Add User</a></button>

        <table class="table table-borderless">
            <thead class="table-dark">
                <tr>
                    <th scope="col">User Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql="SELECT * FROM crud";
                    $result=mysqli_query($conn, $sql);

                    if($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $mobile = $row['mobile'];
                            $email = $row['email'];
                            $password = $row['password'];

                            echo '<tr>
                                    <th scope="row">'.$id.'</th>
                                    <td>'.$name.'</td>
                                    <td>'.$mobile.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$password.'</td>
                                    <td>
                                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                                    </td>
                                </tr>';
                        }
                    }

                ?>
            
            </tbody>
        </table>
    </div>
    
     
</body>
</html>