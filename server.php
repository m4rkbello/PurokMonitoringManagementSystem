<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "purokmonitoringsystem";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";

// Close the connection
$conn->close();
?>
