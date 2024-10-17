<?php
// db_connect.php
$servername = "localhost";
$username = "root";
$password = "dr@vishal14!";
$dbname = "banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   
?>