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
	<?php include("navbar.php"); ?>

<!-- Hero Section -->
<div class="hsection">
<section class="hero-section">
<div class="hero jumbotron jumbotron-fluid"  style="background-image: url(images/city.jpg); height:650px;">
      <div class="container">
        <h1 class="display-4">Find Your Perfect Room</h1>
        <p class="lead">Find the perfect room, flat, or apartment for your budget and needs</p>
        <form method="post" action="result.php">
          <div class="form-group">
            <label for="property-type">Property Type</label>
            <select class="form-control w-75" id="property_type" name="property_type">
              <option>Room</option>
              <option>Flat</option>
              <option>Apartment</option>
            </select>
          </div>
		  
          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control w-75" id="location" name="city" placeholder="Enter Location">
		  </div>

          <div class="form-group">
            <label for="price-range">Price Range</label>
            <input type="number" class="form-control w-75" id="price" name="price" placeholder="Enter Price Range" min="3000" max="100000">
          </div>
          <button type="submit" id="search" name="search" class="btn btn-primary">Search</button>
        </form>
      </div>
    </div>
</section>
</div>


<!-- ------result section----- -->
<div class="services">
          <h1 style="text-align:center; margin-top:40px; font-size:50px;">Our Services</h1>
          <div class="services-row">
            <img class="service1-img" src="images/2.jpg" alt="Room">
            <h2 class="service-type">Room</h2>
            <p class="services-text">Cozy and well-furnished room available for rent in a clean and quiet apartment. Perfect for a single person or a couple, the room comes fully equipped with a comfortable bed, a wardrobe, a desk, and a chair. Rent includes all utilities and high-speed internet. Conveniently located near public transportation and various amenities. Contact us for more information and to schedule a viewing.</p>
          </div>
          <div class="services-row">
            <img class="service2-img" src="images/3.jpg" alt="Flat">
            <h2 class="service-type">Flat</h2>
            <p class="services-text">Beautifully designed and spacious flat available for rent in a desirable location. The flat features a fully equipped kitchen, a clean and modern bathroom, and a comfortable living room area. The bedrooms are well-lit and come fully furnished with comfortable beds, wardrobes, desks, and chairs. Rent includes all utilities and high-speed internet. Conveniently located near public transportation and various amenities. Contact us for more information and to schedule a viewing.</p>
          </div>
		  <div class="services-row">
            <img class="service1-img" src="images/apart.jpg" alt="Apartment">
            <h2 class="service-type">Apartment</h2>
            <p class="services-text">Stylish and modern apartment available for rent in a prime location. The apartment features a spacious and fully equipped kitchen, a clean and contemporary bathroom, and a comfortable living room area. The bedrooms are well-lit and come fully furnished with comfortable beds, wardrobes, desks, and chairs. Rent includes all utilities and high-speed internet. Conveniently located near public transportation and various amenities. Contact us for more information and to schedule a viewing.</p>
          </div>
        </div>


<!-------footer section------>
<footer id="footer">
    <i class="fa footer-icon fa-instagram" aria-hidden="true"></i>
    <i class="fa footer-icon fa-twitter" aria-hidden="true"></i>
    <i class="fa footer-icon fa-youtube" aria-hidden="true"></i>
    <i class="fa footer-icon fa-facebook" aria-hidden="true"></i>
    <p class="copyright">© Copyright House Rental System</p>

  </footer>

<button id="scroll-to-top">
  <i class="arrow fa-solid fa-arrow-up"></i>
</button>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

