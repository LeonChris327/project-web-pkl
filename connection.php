<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bossnanny";

$conn = mysqli_connect("localhost","root","","bossnanny");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }


?>