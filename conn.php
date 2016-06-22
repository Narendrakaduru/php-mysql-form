<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Uname=$_POST['username'];	
$Password=$_POST['password'];
$confirm=$_POST['confirm'];
$Email=$_POST['Email'];

$sql = "INSERT INTO sign (Uname, Password, confirm, Email)
VALUES ('$Uname','$Password','$confirm','$Email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>