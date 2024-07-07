<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Select database
if ($conn->select_db("Lab_7")) {
    echo "Database selected successfully";
} else {
    echo "Error selecting database: " . $conn->error;
}

$conn->close();
?>
