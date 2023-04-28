<!DOCTYPE html>
<html>
<head>
	<title>House Rental System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/b26cf539d2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="home.php">House Rental</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="home.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="addyourproperty.php">Add Property</a>
				</li>
				<?php
                session_start();
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                echo '<li class="nav-link">Welcome,' . $_SESSION['name'] . '</li>';
                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                } else {
                echo '<li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>';
                 }

                ?>
				
</ul>
</div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
