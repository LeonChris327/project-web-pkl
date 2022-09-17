<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bossnanny";

$conn = mysqli_connect("localhost","root","","bossnanny");

if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}
?>