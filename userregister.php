<?php

// Connect to the MySQL database
$conn = new mysqli('localhost', 'root', '', 'roomrental_db');

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Validate the form data
    if (!empty($name) && !empty($email) && !empty($password) && !empty($confirm_password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($password == $confirm_password) {
                
                // Prepare the SQL statement
                $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $name, $email, $password);
                // Execute the SQL statement
                if ($stmt->execute()) {
                    echo "Account Created Successfully";
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                echo "Passwords do not match.";
            }
        } else {
            echo "Invalid email address.";
        }
    } else {
        echo "Please fill in all fields.";
    }
}

$conn->close();
?>