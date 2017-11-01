<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "woodshome";

$conn = new mysqli($servername,$username,$password,$dbname);

$fname = $_POST['fname_input'];
$lname = $_POST['lname_input'];
$email = $_POST['email_input'];
$pass = $_POST['pwd_input'];
$uname = $_POST['uname_input'];

$sql = "INSERT INTO Users (firstname,lastname,email,username,password) VALUES ( '$fname' , '$lname' , '$email' , '$uname' , '$pass')";

if($conn -> query($sql) === TRUE)
    include("index.php");
else
    echo("Error inserting values: " . $conn -> error);
?>
