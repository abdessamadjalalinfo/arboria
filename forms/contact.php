<?php
$servername = "eu-cdbr-west-01.cleardb.com";
$username = "b6360c38fb5d88";
$password = "88178309";
$dbname = "heroku_5dd478632b9e336";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$moi=$_POST['moi'];
$namee=$_POST['namee'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$regime=$_POST['regime'];
$datee=$_POST['datee'];
$zip=$_POST['zip'];



$sql = " INSERT INTO arboria (moi,namee, email,phone,datee,regime,zip) VALUES ( '$moi', '$namee', '$email' , '$phone','$datee','$regime','$zip') ";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  
}

$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>