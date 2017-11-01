<?php
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "woodshome";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error)
    die("Connection Failed: " . $conn -> connect_error);
else
    echo("Connection Successful...");
echo "<hr>";
echo "<br>";
var_dump($_POST);
$aname = $_POST['aname'];
$anum = $_POST['anum'];
$adate = $_POST['adate'];
$aemail = $_POST['aemail'];
$aadd = $_POST['aadd'];
$sql = "INSERT INTO book (name,number,date,email,address) VALUES ( '$aname' , '$anum' , '$adate' , '$aemail' , '$aadd')";
$conn -> query($sql); 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   // $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'handyman115a1049@gmail.com';                 // SMTP username
    $mail->Password = 'handyman123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('handyman115a1049@gmail.com', 'Mailer');
    $mail->addAddress($aemail, 'Joe User');     // Add a recipient
  //  $mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
  //  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: index.html");
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}