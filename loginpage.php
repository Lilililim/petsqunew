<?php
include "koneksi.php";
include "login.php";
?>


<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">

  <link rel="stylesheet" href="dashboard.css">
  <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

</head>

<body class="dashboard-utama">
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
          <?php
          if (isset($_SESSION["role"])) {
          ?>
            <a class="nav-link ms-2" href="logoutpage.php">Logout</a>
          <?php
          } else {
          ?>
            <a class="nav-link ms-2" href="loginpage.php">Login</a>
            <a class="nav-link ms-2" href="signuppage.php">Daftar</a>
          <?php
          } ?>
        </ul>
        <a></a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <img src="paw.png" class="img-responsive mx-auto d-block" alt="#">
            <h4 class="text-center">Selamat Datang</h4>
            <p class="text-center mt-3" style="font-weight: 500;">Silahkan masukkan username dan password</p>
            <form method="post" action="login.php">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Username" placeholder="Username" name="Username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">Remember password </label>
              </div>
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Login" name="Login">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid d-flex align-items-center justify-content-center flex-column text-center" style="top:9%; bottom: 0%">
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>