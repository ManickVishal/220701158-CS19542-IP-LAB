<?php
$servername = "localhost"; 
$username = "root";         
$password = "dr@vishal14!";            
$dbname = "employee";       

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql_create = " delete from emp where empid=401";
$conn->query($sql_create);
// $sql_create = "INSERT INTO emp (empid,ename,desig,dept) VALUES (401, 'neeraj','tl','hr')";
// $conn->query($sql_create);
// $sql_create = "update emp set sal=520000 where empid=301";
if ($conn->query($sql_create) === TRUE) {
    echo "New record inserted and updated successfully<br>";
} else {
   echo "Error: " . $sql_create . "<br>" . $conn->error;
}
$sql_create = "select empid,ename,desig,dept from emp";
$res=$conn->query($sql_create);
while($row=$res->fetch_assoc()) { echo "<strong>empid: </strong>". $row["empid"] ."<br><strong>name: </strong>". $row["ename"]."<br><strong>designation: </strong>".$row["desig"]."<br><strong>departmnt: </strong>".$row["dept"]."<br><br>";}
?>