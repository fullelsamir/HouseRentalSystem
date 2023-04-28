<?php
session_start();
if (!isset($_SESSION['name'])) {
    // Redirect to login page if user is not logged in
    echo "Please Log in first to add your property";
    exit;
}


// Connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roomrental_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get property data from the form
$name = $_POST['name'];
$type = $_POST['type'];
$provience = $_POST['provience'];
$district = $_POST['district'];
$city = $_POST['city'];
$street = $_POST['street'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$price = $_POST['price'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$file = $_POST['file'];

// Insert property data into the database
$sql = "INSERT INTO properties (name, type, provience, district, city, street,longitude, latitude, price, phone, description, file)
VALUES ('$name', '$type', '$provience', '$district', '$city', '$street', '$longitude','$latitude', '$price', '$phone', '$description', '$file')";

if ($conn->query($sql) === TRUE) {
    echo "New property added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

