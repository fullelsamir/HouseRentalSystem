<!DOCTYPE html>
<html>
<head>
	<title>House Rental System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=myMap"></script>
	<script src="https://kit.fontawesome.com/b26cf539d2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body style="background-color:rgb(249, 249, 249);">
<?php include("navbar.php"); ?>


<!-------contact Us------->

<section class="container contact-us" style="background-color:rgb(244, 244, 244);">
  <div class="row">
    <div class="col-md-6">
      <h2>Get in Touch</h2>
      <form action="usercontact.php" method="post">
        <div class="form-group">
          <label for="name" class="text-dark">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Your name" required>
        </div>
        <div class="form-group">
          <label for="email" class="text-dark">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required>
        </div>
        <div class="form-group">
          <label for="message" class="text-dark">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message" required></textarea>
        </div>
        <button type="submit" id="send_message" name="send_message" class="btn btn-primary btn-lg">Send Message</button>
      </form>
    </div>
    <div class="col-md-6">
      <h2>Visit Us</h2>
      <div id="map" style="height: 400px; width: 100%;"></div><br>
      <p class="text-danger">Goalpark Street-5<br>Butwal, Rupandehi 32900</p>
      <p class="text-success">Phone: 9812345678<br>Email: info@houserental.com</p>
    </div>
  </div>
</section>

<script>
    function initMap() {
      var mapOptions = {
        center: new google.maps.LatLng(27.709127, 83.468081), 
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);

      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(27.709127, 83.468081),
        map: map,
        title: 'Butwal'
      });

      marker.setMap(map);
    }

    initMap();
//form validation
    const form = document.querySelector('form');
   const nameInput = document.getElementById('name');


form.addEventListener('submit', function(event) {
  if (!validatename()) {
    event.preventDefault();
  }
});

function validatename() {
  const nameValue = nameInput.value.trim();

  if (nameValue === '') {
    nameInput.setCustomValidity('Name is required.');
    return false;
  }

  // Check if username contains only letters and numbers
  const nameRegex = /^[a-zA-Z]+$/;
  if (!nameRegex.test(nameValue)) {
    nameInput.setCustomValidity('Name must contain only letters');
    return false;
  }

  nameInput.setCustomValidity('');
  return true;
}
  </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
