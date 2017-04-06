<?php
/*This file needs a reference to the database (ex. $dbcon was used in signup.php) */
    
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$results = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "your username and or password is incorrect";
} else {
    echo "your username and password are correct";
}


?>