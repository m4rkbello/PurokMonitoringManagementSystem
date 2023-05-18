<?php
// Retrieve the form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthday'];
$status = $_POST['status'];
$age = $_POST['age'];
$occupation = $_POST['occupation'];

// server connection
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

// Prepare the insert statement
$stmt = $conn->prepare("INSERT INTO persons_tbl (pFname, pLname, pAddress, pCpNo , pGender, pGender, pStatus, pAge, pOccupation) VALUES ($firstname, $lastname, $address, $phonenumber, $gender, $birthdate, $status, $age, $occupation)");
$stmt->bind_param("sssssssss", $firstname, $lastname, $address, $phonenumber, $gender, $birthdate, $status, $age, $occupation);

// Execute the insert statement
if ($stmt->execute()) {
    echo '<script>window.alert("Saved suc");</script>';
  
} else {
  echo "failure"; // Insertion failed
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
