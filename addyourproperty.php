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

<!--------Add Property-------->

<section id="addyourproperty" class="add-property"  style="background-image: url(images/bedroom.jpg);" >
	<div class="container" >
		<h2 style="text-align:center">Add Your Property</h2>
		<form action="userproperty.php" method="post">
		<div class="form-group">
				<label for="Name">Owner Name</label>
				<input type="text" name="name" class="form-control w-75 " id="name" required>
			</div>
			<div class="form-group">
				<label for="type">Type</label>
				<select class="form-control w-75" name="type" id="type" required>
					<option>Room</option>
					<option>Flat</option>
					<option>Apartment</option>
				</select>
			</div>
		<div class="form-group">
            <label for="provinceSelect">Province</label>
             <select class="form-control w-75" id="provinceSelect" name="provience" required>
                <option value="">Select Province</option>
                <option value="province1">Provience 1</option>
                <option value="province2">Province 2</option>
                <option value="province3">Province 3</option>
				<option value="province4">Gandaki Pradesh</option>
				<option value="province5">Lumbini Provience</option>
				<option value="province6">Karnali Pradesh</option>
				<option value="province7">Sudurpashchim Pradesh</option>
             </select>
        </div>
        <div class="form-group">
            <label for="districtSelect">District</label>
              <select class="form-control w-75" id="districtSelect" name="district" required>
                <option value="">Select District</option>
              </select>
        </div>
			<div class="form-group">
				<label for="location">City</label>
				<input type="location" name="city" class="form-control w-75" id="location" required>
			</div>
			<div class="form-group">
				<label for="location">Street</label>
				<input type="location" name="street" class="form-control w-75" id="location" required>
			</div>
      <div class="form-group">
				<label for="location">Longitude</label>
				<input type="location" name="longitude" class="form-control w-75" id="longitude" required>
			</div>
      <div class="form-group">
				<label for="location">Latitude</label>
				<input type="location" name="latitude" class="form-control w-75" id="latitude" required>
			</div>
      <input type="checkbox" onclick="getLocation()" id="geolocation" name="geolocation" value="GeoLocation" style="margin-left:140px">
      <label for="geolocation"> Get your current Location</label><br>
			<div class="form-group">
				<label for="price">Price</label>
				<input type="number" class="form-control w-75" name="price" id="price" min="3000" max="100000" required>
			</div>
			<div class="form-group">
				<label for="phone">Phone No.</label>
				<input type="tel" name="phone" class="form-control w-75" id="phone" required>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea class="form-control w-75" name="description" id="description" rows="3" required></textarea>
			</div>
			<div class="form-group">
				<label for="file">Insert Image</label>
				<input type="file" class="form-control w-75" name="file" id="file">
			</div>
			<button type="submit" name="addyour_property" class="btn btn-primary" style="margin-left:140px">Add Property</button>
		</form>
	</div>
</section>


<!-----Footer section----->

<footer id="footer">
    <i class="fa footer-icon fa-instagram" aria-hidden="true"></i>
    <i class="fa footer-icon fa-twitter" aria-hidden="true"></i>
    <i class="fa footer-icon fa-youtube" aria-hidden="true"></i>
    <i class="fa footer-icon fa-facebook" aria-hidden="true"></i>
    <p class="copyright">© Copyright House Rental System</p>

  </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<script type="text/javascript">
const provinces = {
  province1: ['Bhojpur', 'Dhankuta', 'Ilam' ,'Jhapa','Khotang','Morang','Okhaldhunga','Panchthar','Sankhuwasabha','Solukhumbu','Sunsari','Taplejung','Terhathum','Udayapur'],
  province2: ['Saptari', 'Siraha', 'Dhanusa','Mahottari','Sarlahi','Bara','Parsa','Rauthhat'],
  province3: ['Sindhuli', 'Ramechhap', 'Dolakha','Bhaktapur','Dhading','Kathmandu','Kavrepalanchok','Lalitpur','Nuwakot','Rasuwa','Sindhupalchok','Chitwan','Makwanpur'],
  province4: ['Baglung', 'Gorkha', 'Kaski','Lamjung','Manang','Mustang','Myagdi','Nawalpur','Parbat','Syangja','Tanahun'],
  province5: ['Kapilvastu', 'Parasi', 'Rupandehi','Arghakanchi','Palpa','Gulmi','Dang','Pyuthan','Rolpa','Eastern Rukum','Banke','Bardiya'],
  province6: ['Western Rukum', 'Salyan', 'Dolpa','Humla','Jumla','Kalikot','Mugu','Surkhet','Dailekh','Jajarkot'],
  province7: ['Kailali', 'Achham', 'Doti','Bajhang','Bajura','Kanchanpur','Dadeldhura','Baitadi','Darchula']
};

document.getElementById('provinceSelect').addEventListener('change', function(event) {
  const selectedProvince = event.target.value;
  const districtSelect = document.getElementById('districtSelect');
  districtSelect.innerHTML = '<option value="">Select District</option>';
  if (!selectedProvince) {
    return;
  }
  const districts = provinces[selectedProvince];
  for (const district of districts) {
    const option = document.createElement('option');
    option.value = district;
    option.text = district;
    districtSelect.appendChild(option);
  }
});

const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const phoneInput = document.getElementById('phone');

form.addEventListener('submit', function(event) {
  if (!validateName()) {
    event.preventDefault();
  }

  if (!validatePhone()) {
    event.preventDefault();
  }
});

function validateName() {
  const nameValue = nameInput.value.trim();

  if (nameValue === '') {
    nameInput.setCustomValidity('Name is required.');
    return false;
  }

  // Check if name contains only letters and spaces
  const nameRegex = /^[a-zA-Z\s]+$/;
  if (!nameRegex.test(nameValue)) {
    nameInput.setCustomValidity('Name must contain only letters and spaces.');
    return false;
  }

  nameInput.setCustomValidity('');
  return true;
}

function validatePhone() {
  const phoneValue = phoneInput.value.trim();

  if (phoneValue === '') {
    phoneInput.setCustomValidity('Phone number is required.');
    return false;
  }

  // Check if phone number is in valid format
  const phoneRegex = /^\d{10}$/;
  if (!phoneRegex.test(phoneValue)) {
    phoneInput.setCustomValidity('Phone number must be a 10-digit number.');
    return false;
  }

  phoneInput.setCustomValidity('');
  return true;
}
//  Longitude and latitude auto fill
function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }
    
    function showPosition(position) {
      document.getElementById("longitude").value = position.coords.longitude;
      document.getElementById("latitude").value = position.coords.latitude;
    }
</script>


</body>
</html>
