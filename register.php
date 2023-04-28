<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!----register section----->
<section class="vh-100" style="background-color:rgb(3, 64, 87); padding-top:30px;">
  <div class="container py-2 h-80">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-1">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images\city.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="userregister.php" method="POST">

                  <div class="d-flex align-items-center mb-2 pb-1">
                    <i class="fas fa-cubes fa-2x me-2" style="color: #ff6219;"></i>
                    <a class="h1 fw-bold mb-0 text-dark" href="home.php">House Rental System</a>
                  </div>

                  <h4 class="fw-normal mb-4 pb-0" style="letter-spacing: 1px;">Register</h4>

                  <div class="form-outline mb-2">
                  <label class="form-label" for="name">Username</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" />
                    
                  </div>

                  <div class="form-outline mb-2">
                  <label class="form-label" for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    
                  </div>

                  <div class=" form-outline mb-2">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
          
                  </div>

                  <div class=" form-outline mb-2">
                  <label class="form-label" for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control form-control-lg" />
                    
                  </div>

                  <div class="pt-1 mb-2">
                    <button class="btn btn-dark btn-lg btn-block" id="register" name="register" type="submit">Register</button>
                  </div>
                  <p class="mb-2 pb-lg-2" style="color: #393f81;">Already have an account? <a href="login.php"
                      style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>


                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const passwordInput = document.getElementById('password');

form.addEventListener('submit', function(event) {
  if (!validatename()) {
    event.preventDefault();
  }

  if (!validatePassword()) {
    event.preventDefault();
  }
});

function validatename() {
  const nameValue = nameInput.value.trim();

  if (nameValue === '') {
    nameInput.setCustomValidity('Username is required.');
    return false;
  }

  // Check if username contains only letters and numbers
  const nameRegex = /^[a-zA-Z]+$/;
  if (!nameRegex.test(nameValue)) {
    nameInput.setCustomValidity('Username must contain only letters');
    return false;
  }

  nameInput.setCustomValidity('');
  return true;
}

function validatePassword() {
  const passwordValue = passwordInput.value.trim();

  if (passwordValue === '') {
    passwordInput.setCustomValidity('Password is required.');
    return false;
  }

  // Check if password is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, and one number
  const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
  if (!passwordRegex.test(passwordValue)) {
    passwordInput.setCustomValidity('Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one number.');
    return false;
  }

  passwordInput.setCustomValidity('');
  return true;
}


  </script>

</body>
</html>

