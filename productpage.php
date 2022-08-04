<?php
include("developers.php");
include "login.php";
$qty;
$harga;
$total;

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products</title>
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
          <a class="nav-link me-2 " aria-current="page" href="dashboard.php">Homepage</a>
          <a class="nav-link ms-2 me-2 active" href="productpage.php">Product</a>
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
                  <th scope="col" style="text-align: center;">Deskripsi</th>
                  <th scope="col" style="text-align: center;">Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if (is_array($fetchData)) {
                  $sn = 1;
                  foreach ($fetchData as $data) {
                ?>
                    <tr>
                      <!-- <td><?php echo $sn; ?></td> -->
                      <td><?php echo $data['ID_produk'] ?? ''; ?></td>
                      <td><?php echo $data['nama_produk'] ?? ''; ?></td>
                      <td><?php echo $data['deskripsi_produk'] ?? ''; ?></td>
                      <td><?php echo $data['harga_produk'] ?? ''; ?></td>
                      <td>
                        <a class="btn btn-primary belibtn" href="#" role="beli_btn">Beli</a>
                      </td>
                    </tr>
                  <?php
                    $sn++;
                  }
                } else { ?>
                  <tr>
                    <td colspan="8">
                      <?php echo $fetchData; ?>
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
  <!--                                                       BELI MODAL                                                         -->
  <!-- ======================================================================================================================== -->
  <div class="modal fade" id="belimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Beli Barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="koneksi.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="beli_id" id="beli_id">

            <div class="form-group">
              <label> Nama Produk</label>
              <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Nama Produk" >
            </div>

            <div class="form-group">
              <label> Deskripsi </label>
              <input type="text" name="Deskripsi" id="Deskripsi" class="form-control" placeholder="Deskripsi" >
            </div>

            <div class="form-group">
              <label> Harga </label>
              <input type="text" name="Harga" id="Harga" class="form-control" placeholder="Harga" >
            </div>

            <div class="form-group">
              <label> Banyak </label>
              <input type="number" name="Banyak" class="form-control" id="Banyak" placeholder="1" min="1">
            </div>
            <div class="form-group">
              <label> Total harga </label>
              <input type="text" name="Total" id="Total" class="form-control" placeholder="Total" >
            </div>
            <div class="form-group">
              <label> Nama </label>
              <input type="text" name="Name" id="Name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label> Alamat </label>
              <input type="text" name="Alamat" id="Alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="form-group">
              <label> No Handphone </label>
              <input type="text" name="nohp" id="nohp" class="form-control" placeholder="nohp">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="beli" class="btn btn-primary">Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ======================================================================================================================== -->
  <!--                                                    KONFIRMASI MODAL                                                      -->
  <!-- ======================================================================================================================== -->
  <!-- <div class="modal fade" id="konfirmasimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Beli Product </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="koneksi.php" method="POST">

          <div class="modal-body">

            <input type="hidden" name="update_id" id="update_id">
            <div class="form-group">
              <label> Nama Produk </label>
              <input type="text" name="KonfirmNama" id="KonfirmNama" class="form-control" disabled>
            </div>
            <div class="form-group">
              <label> Harga </label>
              <input type="text" name="KonfirmHarga" id="KonfirmHarga" class="form-control" disabled>
            </div>
            <div>
              <label> Jumlah Pembelian</label>
              <input type="number" name="KonfirmInputJumlah" class="form-control" id="KonfirmInputJumlah" placeholder="0" min="0">
            </div>
            <div class="form-group">
              <label> Total Harga </label>
              <input type="text" name="KonfirmTotalHarga" id="KonfirmTotalHarga" class="form-control" placeholder="ga muncul" disabled>
              <p>a : <?php echo $total ?></p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>

        </form>

      </div>
    </div>
  </div> -->


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

      $('.belibtn').on('click', function() {

        $('#belimodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();

        console.log(data);

        $('#beli_id').val(data[0]);
        $('#Nama').val(data[1]);
        $('#Deskripsi').val(data[2]);
        $('#Harga').val(data[3]);
        $('#Total').val(data[3]);
      });
    });
  </script>

  <!-- <script>
    $(document).ready(function() {
      $('.konfirmasibtn').on('click', function() {
        $('#konfirmasimodal').modal('show');
        $('#belimodal').modal('hide');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
          return $(this).text();
        }).get();


        console.log(data);
        $('#update_id').val(data[0]);
        $('#KonfirmNama').val(data[1]);
        $('#KonfirmHarga').val(data[2]);
        $('#KonfirmJumlah').val(data[3]);
        $('#KonfirmTotalHarga').val($total);
      });
    });
  </script> -->
</body>

</html>