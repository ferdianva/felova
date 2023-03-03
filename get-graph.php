<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kel7b";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $created_date = mysqli_query($conn, "SELECT created_date from logdata order by id asc");
// $suhu = mysqli_query($conn, "SELECT suhu from logdata");
// $kelembapan = mysqli_query($conn, "SELECT kelembapan from logdata");

?>