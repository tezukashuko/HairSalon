<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barbershop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

date_default_timezone_set('America/Winnipeg');

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// $sql = "SELECT * FROM clients";
// $result = $conn->query($sql);
// $s=1;
?>