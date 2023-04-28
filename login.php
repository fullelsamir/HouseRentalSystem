<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body> 

  <!---login section-->
<section class="vh-100" style="background-color:rgb(3, 64, 87)">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-5 col-lg-5 d-none d-md-block">
              <img src="images\city.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="userlogin.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <a class="h1 fw-bold mb-0 text-dark" href="home.php">House Rental System</a>
                  </div>

                  <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h4>

                  <div class="form-outline mb-3">
                  <label class="form-label" for="name">Username</label>
                    <input type="text" id="name" name="name"  class="form-control form-control-lg" />
                    
                  </div>

                  <div class="form-outline mb-3">
                  <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="password" name="password"  class="form-control form-control-lg" />
                    
                  </div>

                  <div class="pt-1 mb-3">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
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

</body>
</html>

