<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login Account | TMW Store</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #b29dca;">
        <div class="featured-image mb-3">
         <img src="../asset/img/logo.png" class="img-fluid" style="width: 250px;">
        </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">TMW Store</p>
    </div> 

    <!-------------------- ------ Right Box ---------------------------->
    <div class="col-md-6 right-box">
        <div class="row align-items-center">
              <div class="header-text mb-4">
                   <h2>Hello!</h2>
                   <p>Welcome to TMW Store</p>
              </div>
              <div class="input-group mb-3">
                  <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
              </div>
              <div class="input-group mb-1">
                  <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
              </div>
              <div class="input-group mb-5 d-flex justify-content-between">
                  <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="formCheck">
                      <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                  </div>
                  <div class="forgot">
                      <small><a href="#">Forgot Password?</a></small>
                  </div>
              </div>
              <div class="input-group mb-3">
                  <button class="btn btn-lg btn-primary w-100 fs-6" style="background: #b29dca;">Login</button>
              </div>    
              <div class="row">
                  <small>Don't have account? <a href="#">Sign Up</a></small>
              </div>
        </div>
     </div> 
    </div>
  </div>

</body>
</html>