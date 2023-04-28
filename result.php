<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/b26cf539d2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/result.css">
</head>
<body style="margin-top:20px;">
    
    <h1 style="text-align:center;">Results</h1>
    <br>
    <?php
    // define database connection variables
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "roomrental_db";

    // create database connection
    $conn = mysqli_connect($host, $user, $password, $database);

    // check if connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // check if form was submitted
    if (isset($_POST['search'])) {
        // get search criteria from form
        $type = $_POST['property_type'];
        $city = $_POST['city'];
        $price = $_POST['price'];

        // construct SQL query with search criteria
        $query = "SELECT * FROM properties WHERE type='$type' AND city='$city' AND price='$price'";

        // execute query
        $result = mysqli_query($conn, $query);

        // check if any matching properties were found
        if (mysqli_num_rows($result) > 0) {
            // loop through results and display in card body
            echo '<div class="card-container">';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
        <div class="card ">
        <img src="images/1.jpg" class="card-img-top" alt="' . $row['name'] . '">
                <div class="card-body">
                <h5 class="card-title"> <span>Owner Name:</span> ' . $row['name'] . '</h5>
                <h5 class="card-text"><span>Location :</span> ' . $row['district'] . ',' . $row['city'] . ', ' . $row['street'] . '</h5>
                <h5 class="card-text"><span>Price :</span> ' . $row['price'] . '</h5><br>
                <a href="viewdetails.php?id=' . $row['id'] . '" class="btn btn-primary">View Details</a>
                </div>  
            </div>';
    }
    echo '</div>';
        } else {
            // display message if no matching properties were found
            echo '<p>No matching properties found.</p>';
        }
    }

    // close database connection
    mysqli_close($conn);
    ?>
</body>
</html>
