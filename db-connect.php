<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname= "reciept_gen";

// Create connection
$conn = mysqli_connect('localhost','root','','reciept_gen');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";


?>