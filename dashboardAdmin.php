<?php
include("developers.php");
include("koneksi.php");
include("login.php");
if (isset($_SESSION["role"]) != "admin") {
  header("location:loginpage.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HomePage Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="dashboard.css">
</head>

<body class="dashboard-utama">
  <nav class="navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse d-flex align-items-center justify-content-between" id="navbarNav">
        <a class="navbar-brand d-flex mb-0 ms-2" style="font-weight: 500;" href="#">
          <img src="paw.png" class="img-responsive me-3">PetsQu Shop</a>
        <ul class="nav nav-pills">
          <a class="nav-link active me-2 " aria-current="page" href="dashboardAdmin.php">Homepage</a>
          <a class="nav-link ms-2 me-2" href="productpageAdmin.php">Product</a>
          <a class="nav-link ms-2 me-2" href="daftarpelangganpage.php">Daftar User</a>
          <a class="nav-link ms-2 me-2" href="daftarpembelianpage.php">Daftar Pembelian</a>
          <?php
          if (isset($_SESSION["role"])) {
          ?>
            <a class="nav-link ms-2" href="logoutpage.php">Logout</a>
          <?php
          } else {
          ?>
            <a class="nav-link ms-2" href="loginpage.php">Login</a>
          <?php
          } ?>
        </ul>
        <a></a>
      </div>
    </div>
  </nav>
  <div class="container-fluid d-flex align-items-center justify-content-center flex-column text-center" style="top:9%; bottom: 0%">
    <!-- <img src="../images/pink-cat-hat.jpg" class="img-responsive col-md-4 col-xs-6" style="border: 5px solid black;"> -->
    <h1 class="text-align-center d-flex" style="justify-content:center;">Selamat Datang di PetsQu Shop</h1>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>