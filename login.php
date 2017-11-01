<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "woodshome";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn -> connect_error)

    die("Connection Failed: " . $conn -> connect_error);
else
    echo("Connection Successful...");
echo "<hr>";
echo "<br>";
$un = $_POST['username_input'];
$pd = $_POST['password_input'];
$sql = "SELECT * FROM Users";
$temp = 1;
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if($row["username"] === $un && $row["password"] === $pd)
        {   
            $cVal = $row["firstname"] . " " . $row["lastname"];
            $temp = 0;
            break;

        }
    }
    if($temp == 1)
        echo "You are not authorized user..";
}
//$cookie_name = "keep";
//setcookie($cookie_name,$cVal,time()+36000,'/');
include("index.html");
ob_end_flush();
?>
