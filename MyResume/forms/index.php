<?php
// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email']?? '';
$subject = $_POST['subject']?? '';
$message = $_POST['message']?? '';


// Create a database connection
$servername = "localhost";
$username = "root";
// $password = "no";
$dbname = "ng";

$conn = new mysqli($servername,$username,"",$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute an SQL query to insert data into the table
$sql = "INSERT INTO register(name, email,subject ,message) VALUES ('$name', '$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
