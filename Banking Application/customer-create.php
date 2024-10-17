<?php
// db_connect.php
$servername = "localhost";
$username = "root";
$password = "dr@vishal14!";
$dbname = "banking";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// SQL query to create the customers table
$sql_create_customers = "CREATE TABLE IF NOT EXISTS customers (
    c_id INT AUTO_INCREMENT PRIMARY KEY,
    c_name VARCHAR(50) NOT NULL
)";

// Execute the query
if ($conn->query($sql_create_customers) === TRUE) {
    echo "Table 'customers' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();
?>