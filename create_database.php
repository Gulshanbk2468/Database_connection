<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "galkot_school"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//  Create the database
$sql = "CREATE DATABASE galkot_school";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close the connection
$conn->close();
?>