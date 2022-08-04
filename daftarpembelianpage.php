<?php
include("developers.php");
include("koneksi.php");
include "login.php";

if (!isset($_SESSION["role"]) == "admin") {
  header("location:loginpage.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Pembelian</title>
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
          <a class="nav-link  me-2 " aria-current="page" href="dashboardAdmin.php">Homepage</a>
          <a class="nav-link ms-2 me-2" href="productpageAdmin.php">Product</a>
          <a class="nav-link ms-2 me-2" href="daftarpelangganpage.php">Daftar User</a>
          <a class="nav-link ms-2 me-2 active" href="daftarpembelianpage.php">Daftar Pembelian</a>
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
  <!-- ======================================================================================================================== -->
  <!--                                                          TABLE                                                           -->
  <!-- ======================================================================================================================== -->
  <div class="container ps-0 pe-0" style="width: 1600px;">
    <div class="form-square row h-100 mt-0 mb-0" style="width: 100%; position:sticky">
      <!-- <div class="col-sm-9 col-md-7 col-lg-5 mx-auto h-100 mt-0 mb-0"> -->
      <div class="card border-0 shadow rounded-0 h-100">
        <div class="card-body p-3 p-sm-5 h-100">
          <div class="row mb-4">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" style="text-align: center;">ID</th>
                  <th scope="col" style="text-align: center;">Nama Produk</th>
                  <th scope="col" style="text-align: center;">Nama Pembeli</th>
                  <th scope="col" style="text-align: center;">Alamat</th>
                  <th scope="col" style="text-align: center;">No HP</th>
                  <th scope="col" style="text-align: center;">Banyaknya</th>
                  <th scope="col" style="text-align: center;">Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (is_array($fetchData2)) {
                  $sn = 1;
                  foreach ($fetchData2 as $data) {
                ?>
                    <tr>
                      <!-- <td><?php echo $sn; ?></td> -->
                      <td><?php echo $data['id_beli'] ?? ''; ?></td>
                      <td><?php echo $data['nama_produk'] ?? ''; ?></td>
                      <td><?php echo $data['nama_pembeli'] ?? ''; ?></td>
                      <td><?php echo $data['alamat_pembeli'] ?? ''; ?></td>
                      <td><?php echo $data['no_hp'] ?? ''; ?></td>
                      <td><?php echo $data['banyak'] ?? ''; ?></td>
                      <td><?php echo $data['total'] ?? ''; ?></td>
                      <td>
                        <a class="btn btn-danger deletebtn" href="#" role="hapus_btn">Hapus</button>
                      </td>
                    </tr>
                  <?php
                    $sn++;
                  }
                } else { ?>
                  <tr>
                    <td colspan="8">
                      <?php echo $fetchData2; ?>
                    </td>
                  <tr>
                  <?php
                } ?>
                  </tr>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </div>

  <!-- ======================================================================================================================== -->
  <!--                                                         DELETE MODAL                                                     -->
  <!-- ======================================================================================================================== -->
  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Delete Pelanggan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="koneksi.php" method="POST">

          <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            <h4>Yakin Dihapus?</h4>
          </div>
          <div class="modal-footer">
            <button type="submit" name="deletepelanggan" class="btn btn-danger">YES</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container-fluid d-flex align-items-center justify-content-center flex-column text-center" style="top:9%; bottom: 0%">
    <!-- <img src="../images/pink-cat-hat.jpg" class="img-responsive col-md-4 col-xs-6" style="border: 5px solid black;"> -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.deletebtn').on('click', function() {
        $('#deletemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);
        $('#delete_id').val(data[0]);
      });
    });
  </script>
</body>

</html>