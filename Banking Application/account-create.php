<?php
// db_connect.php
$servername = "localhost";
$username = "root";
$password = "dr@vishal14!";
$dbname = "banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// SQL query to create the accounts table
$sql_create_accounts = "CREATE TABLE IF NOT EXISTS accounts (
    ano INT AUTO_INCREMENT PRIMARY KEY,
    atype VARCHAR(50) NOT NULL,
    balance DECIMAL(15, 2) DEFAULT 0.00,
    cid INT NOT NULL
)";

// Execute the query
if ($conn->query($sql_create_accounts) === TRUE) {
    echo "Table 'accounts' created successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

$conn->close();
?>