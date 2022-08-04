<?php
session_start();
include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">
  </head>
  
<body class="dashboard-utama position-sticky">
  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-flex align-items-center justify-content-between" id="navbarNav">
          <a class="navbar-brand d-flex mb-0 ms-2" style="font-weight: 500;" href="#"> 
            <img src="paw.png" class="img-responsive me-3">
            <p class="petsqu-text">PetsQu Shop</p> 
          </a>
          <ul class="nav nav-pills">
            <a class="nav-link me-2 " aria-current="page" href="dashboard.php">Homepage</a>
            <a class="nav-link ms-2 me-2 " href="productpage.php">Product</a>
            <a class="nav-link ms-2 me-2 " href="loginpage.php">Login</a>
            <a class="nav-link active ms-2 " href="signuppage.php">Daftar</a>
          </ul>
        <a></a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="form-square row h-100 mt-0 mb-0">
      <!-- <div class="col-sm-9 col-md-7 col-lg-5 mx-auto h-100 mt-0 mb-0"> -->
        <div class="card border-0 shadow rounded-0 h-100">
          <div class="card-body p-4 p-sm-5 h-100">
            <h4 class="text-center">Form Pendaftaran</h4>
            <p class="text-center mt-3" style="font-weight: 500;">Silahkan masukkan username dan password</p>
            <form method="post" action="koneksi.php">
              <h6>Nama</h6>
              <div class="form mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nama" name="Nama">
              </div>
              <h6>Alamat</h6>
              <div class="form mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Alamat" name="Alamat">
              </div>
              <h6>No. HP</h6>
              <div class="form mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="No. HP" name="No_HP">
              </div>
              <h6>Username</h6>
              <div class="form mb-3">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Username" name="Username">
              </div>
              <h6>Password</h6>
              <div class="form mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Password1">
              </div>
              <h6>Confirm Password</h6>
              <div class="form mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="Password2">
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="signup_btn">Sign Up</button>
            </form>
          </div>
        </div>
      <!-- </div> -->
    </div>
  </div>
  <div class="container-fluid d-flex align-items-center justify-content-center flex-column text-center" style="top:9%; bottom: 0%">
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>