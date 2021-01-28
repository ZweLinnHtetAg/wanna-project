<?php

include('config.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if($result->num_rows >0)
                {
                    while($row=$result->fetch_assoc())
                    { ?>
                        <tr>
                            <td> <?php  echo $row['id'] ?></td>
                            <td> <?php  echo $row['name'] ?></td>
                            <td> <?php  echo $row['email'] ?></td>
                            <td> <?php  echo $row['age'] ?></td>
                            <td> <?php  echo $row['gender'] ?></td>
                            <td> <?php  echo $row['address'] ?></td>
                        </tr>
           <?php    }
                }
            ?>    
            </tbody>
        </table>
        <div class="row justify-content-end mt-5">
        <div class="col-md-2">
            <a href="newUser.php" class="btn btn-success float-right"> Add User </a>
        </div>
        </div>
        
    </div>
</body>
</html>
