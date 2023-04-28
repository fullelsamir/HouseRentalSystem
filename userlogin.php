<?php
    // Connect to the database
    $db = new mysqli("localhost", "root", "", "roomrental_db");
    
    // Get the email and password from the form
    $name = $_POST["name"];
    $password = $_POST["password"];
    
    // Prepare and execute the query
    $stmt = $db->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->get_result();
    
    // Check if a user was found
    if ($result->num_rows > 0) {
        // Log the user in
        session_start();
        $_SESSION["logged_in"] = true;
        $_SESSION["name"] = $name;
        
        // Redirect to the dashboard
        echo "Login Successful";
    } else {
        // Display an error message
        echo "Invalid username or password. Please try again.";
    }
?>
