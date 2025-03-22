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

//  Create the students table
$sql = "CREATE TABLE  students (

    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(25) NOT NULL,
    dob DATE NOT NULL,
    class VARCHAR(10) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email VARCHAR(20) NOT NULL,
    phone VARCHAR(10) NOT NULL
)";

// Execute the query and check if the table was created
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

//  Close the connection
$conn->close();
?>
