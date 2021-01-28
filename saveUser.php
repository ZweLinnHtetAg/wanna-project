<?php

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];

include('config.php');

$sql = "INSERT INTO users (`id`,`name`,`email`,`age`,`gender`,`address`) VALUES (NULL,'$name','$email','$age','$gender','$address')";
mysqli_query($conn,$sql);


header("location:users.php");


?>