<?php 
require_once "connect.php";

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "galkot_school"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

// Insert form data into the database
    $sql = "INSERT INTO students (firstname, lastname, dob, class, address, email, phone)
            VALUES ('$firstname', '$lastname', '$dob', '$class', '$address', '$email', '$phone')";

    //  Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
