
<?php
if (isset($_POST['send_message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'roomrental_db');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the message into the database
    $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo "Your message has been sent.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
