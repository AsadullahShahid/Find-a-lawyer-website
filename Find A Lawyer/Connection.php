<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "find lawyer";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create Connection

if ($dbname) {
    echo "Connection created successfully";
} else {
    echo "Error creating Connection: " . $conn->error;
}

$conn->close();
?>