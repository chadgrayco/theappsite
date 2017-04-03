<?php

$dbcon = mysqli_connect('localhost', 'graybros_chad', 'chadgray89');

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO graybros_Users . auth (email, username, password) VALUES('$email','$username', '$password')";
if(mysqli_query($dbcon, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($dbcon);
  }

?>