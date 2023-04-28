<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roomrental_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve room details from the database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM properties WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $owner_name = $row['name'];
        $room_type = $row['type'];
        $province = $row['provience'];
        $district = $row['district'];
        $city = $row['city'];
        $street = $row['street'];
        $longitude = $row['longitude'];
        $latitude = $row['latitude'];
        $phone = $row['phone'];
        $description = $row['description'];
    } else {
        echo "No room found with the given ID.";
        exit();
    }
} else {
    echo "Room ID not provided.";
    exit();
}

// Display room details
echo "
   <div style='margin: 30 50 0 50;'>
   <img style='width:45%; height:400px; float:right' src='images/1.jpg' alt='Room Image'>
   <h1>Room Details</h1>
   <p><strong>Owner Name:</strong> $owner_name</p>
   <p><strong>Type:</strong> $room_type</p>
   <p><strong>Province:</strong> $province</p>
   <p><strong>District:</strong> $district</p>
   <p><strong>City:</strong> $city</p>
   <p><strong>Street:</strong> $street</p>
   <p><strong>Phone:</strong> $phone</p>
   <p><strong>Description:</strong> $description</p>
   <a href='https://esewa.com.np'>Book Now </a>
   </div><br><br>";
   echo'<h4 class="ml-5">Give your opinion about this property</h4>';
   echo '<form method="post">';
   echo'<div class="form-group w-25 ml-5"><label for="name" class="text-dark">Name</label><input type="text" class="form-control" id="name" name="name" placeholder="Your name" required></div>';
   echo '<div class="form-group w-25  ml-5"><label for="comment" class="text-dark">Comment</label><textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Your Comment" required></textarea></div>';
   echo '<button type="submit" id="send_comment" name="send_comment" class="btn btn-primary ml-5">Comment</button>';
   echo '</form>';
   
   if (isset($_POST['send_comment'])) {
    // Get the user's name and comment
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    
    // Display the new comment with the user's name
    echo '<p class="ml-5"><strong>' . $name . ':</strong> ' . $comment . '</p>';
}

   echo '<iframe width="100%" height="400" frameborder="0" style="border:0"src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSNW7Pt4PQZ7qxeT6rrTAQoBqpcw51KBE&libraries=places ' . $latitude . ',' . $longitude . '" allowfullscreen></iframe>';
   
$conn->close();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
