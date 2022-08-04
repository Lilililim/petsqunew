<?php
$HOST = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "petsqushop";
$USERACTIVE = "";
$KONEKSI = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE) or
    die("koneksi tidak terhubung");

// <!-- ======================================================================================================================== -->
// <!--                                                      TAMBAH PRODUK                                                       -->
// <!-- ======================================================================================================================== -->
if (isset($_POST["tambah_btn"])) {
    $nama_produk = $_POST["Nama_produk"];
    $deskripsi_produk = $_POST["Deskripsi_produk"];
    $harga_produk = $_POST["Harga_produk"];

    $query = "INSERT INTO `t_produk` (`ID_produk`, `nama_produk`, `deskripsi_produk`, `harga_produk`) VALUES (NULL, '$nama_produk', '$deskripsi_produk', '$harga_produk')";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: productpageAdmin.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
// <!-- ======================================================================================================================== -->
// <!--                                                      REGISTER USER                                                       -->
// <!-- ======================================================================================================================== -->
if (isset($_POST["signup_btn"])) {
    $username = $_POST["Username"];
    $password1 = $_POST["Password1"];
    $password2 = $_POST["Password2"];
    $nama_pelanggan = $_POST["Nama"];
    $alamat_pelanggan = $_POST["Alamat"];
    $no_hp = $_POST["No_HP"];
    if ($password1 == $password2) {
        $passwordHash = password_hash($password1, PASSWORD_BCRYPT);
        $query = "INSERT INTO `t_pelanggan` (`ID_pelanggan`, `username`, `role`, `password`, `nama_pelanggan`, `alamat_pelanggan`, `no_hp`) 
                    VALUES (NULL, '$username', 'pelanggan', '$passwordHash', '$nama_pelanggan', '$alamat_pelanggan', '$no_hp')";
        $query_run = mysqli_query($KONEKSI, $query);

        if ($query_run) {
            echo '<script> alert("Data Saved"); </script>';
            header("Location: loginpage.php");
        } else {
            echo '<script> alert("Data Not Saved"); </script>';
        }
    } else {
?>
        <div class="alert alert-primary" role="alert">
            <h4> Password tidak sama </h4>
            <button onclick="history.back()">Go Back</button>
        </div>
    <?php
    }
}

// <!-- ======================================================================================================================== -->
// <!--                                                        PEMBELIAN                                                         -->
// <!-- ======================================================================================================================== -->
if (isset($_POST["beli"])) {
    $NamaPR = $_POST["Nama"];
    $Deskripsi = $_POST["Deskripsi"];
    $Harga = $_POST["Harga"];
    $Banyak = $_POST["Banyak"];
    $Total = $_POST["Total"];
    $Nama = $_POST["Name"];
    $Alamat = $_POST["Alamat"];
    $nohp = $_POST["nohp"];
    if ($NamaPR == $NamaPR) {
        $query = "INSERT INTO t_beli (ID_beli, nama_produk, nama_pembeli, alamat_pembeli, no_hp, banyak, total) 
                    VALUES (NULL, '$NamaPR', '$Nama', '$Alamat', '$nohp', '$Banyak', $Total)";
        $query_run = mysqli_query($KONEKSI, $query);

        if ($query_run) {
            echo '<script> alert("Data Saved"); </script>';
            header("Location: productpage.php");
        } else {
            echo '<script> alert("Data Not Saved"); </script>';
        }
    } else {
    ?>
        <div class="alert alert-primary" role="alert">
            <h4> Password tidak sama </h4>
            <button onclick="history.back()">Go Back</button>
        </div>
<?php
    }
}

// <!-- ======================================================================================================================== -->
// <!--                                                      UPDATE PRODUK                                                       -->
// <!-- ======================================================================================================================== -->

if (isset($_POST["updatedata"])) {
    $ID_produk = $_POST["update_id"];
    $nama_produk = $_POST["EditNama"];
    $deskripsi_produk = $_POST["EditDeskripsi"];
    $harga_produk = $_POST["EditHarga"];

    $query = "UPDATE t_produk SET nama_produk = '$nama_produk', deskripsi_produk = '$deskripsi_produk', harga_produk = '$harga_produk' WHERE ID_produk = '$ID_produk' ";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: productpageAdmin.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
        header("Location: productpageAdmin.php");
    }
}

// <!-- ======================================================================================================================== -->
// <!--                                                      HAPUS PRODUK                                                        -->
// <!-- ======================================================================================================================== -->
if (isset($_POST["deletedata"])) {
    $ID_produk = $_POST["delete_id"];

    $query = "DELETE FROM t_produk WHERE ID_produk = '$ID_produk'";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: productpageAdmin.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

// <!-- ======================================================================================================================== -->
// <!--                                                      HAPUS PELANGGAN                                                     -->
// <!-- ======================================================================================================================== -->

if (isset($_POST["deletepelanggan"])) {
    $ID_pelanggan = $_POST["delete_id"];

    $query = "DELETE FROM t_pelanggan WHERE ID_pelanggan = '$ID_pelanggan'";
    $query_run = mysqli_query($KONEKSI, $query);

    if ($query_run) {
        echo '<script> alert("Data Saved"); </script>';
        header("Location: daftarpelangganpage.php");
    } else {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
