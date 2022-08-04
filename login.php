<?php
session_start();
include "koneksi.php";


$NAMA = "a";
$ALAMAT = "b";
$NOHP = "c";
if (isset($_POST["Login"])) {
    $USERNAME = $_POST["Username"];
    $PASSWORD = $_POST["Password"];
    //$QUERY = mysqli_query($KONEKSI, "SELECT * FROM `t_pelanggan` WHERE Username = '$USERNAME' AND Password = '$PASSWORD'") or die();
    $QUERY = mysqli_query($KONEKSI, "SELECT * FROM `t_pelanggan` WHERE Username = '$USERNAME'") or die();
    $DATA = mysqli_fetch_assoc($QUERY);
    //if (mysqli_num_rows($QUERY) > 0) {
    if (password_verify($PASSWORD, $DATA["password"])==$DATA["password"]) {
        //$DATA = mysqli_fetch_assoc($QUERY);
        $USERACTIVE = $DATA["role"];
        if ($DATA["role"] == "admin") {
            echo "Login sebagai Admin";
            $_SESSION["role"] = "admin";
        } else {
            echo "Login sebagai Pelanggan";
            $_SESSION["role"] = "pelanggan";
        }
        $NAMA = $DATA["nama_pelanggan"];
        $ALAMAT = $DATA["alamat_pelanggan"];
        $NOHP = $DATA["no_hp"];
        if ($DATA["role"] == "admin") {
            $_SESSION["role"] = "admin";
            header("location: productpageAdmin.php");
        } else {
            header("location: dashboard.php");
        }
    }
    else {
        header("location: loginpage.php");
    }
}
