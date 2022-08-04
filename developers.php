<?php
include("koneksi.php");

$db = $KONEKSI;
$tableName = "t_produk";
$columns = ['ID_produk', 'nama_produk', 'deskripsi_produk', 'harga_produk'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
   if (empty($db)) {
      $msg = "Database connection error";
   } elseif (empty($columns) || !is_array($columns)) {
      $msg = "columns Name must be defined in an indexed array";
   } elseif (empty($tableName)) {
      $msg = "Table Name is empty";
   } else {

      $columnName = implode(", ", $columns);
      $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY ID_produk ASC";
      $result = $db->query($query);

      if ($result == true) {
         if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg = $row;
         } else {
            $msg = "No Data Found";
         }
      } else {
         $msg = mysqli_error($db);
      }
   }
   return $msg;
}

$tableName1 = "t_pelanggan";
$columns1 = ['ID_pelanggan', 'nama_pelanggan', 'alamat_pelanggan', 'no_hp'];
$fetchData1 = fetch_data1($db, $tableName1, $columns1);

function fetch_data1($db, $tableName1, $columns1)
{
   if (empty($db)) {
      $msg = "Database connection error";
   } elseif (empty($columns1) || !is_array($columns1)) {
      $msg = "columns Name must be defined in an indexed array";
   } elseif (empty($tableName1)) {
      $msg = "Table Name is empty";
   } else {

      $columnName1 = implode(", ", $columns1);
      $query = "SELECT " . $columnName1 . " FROM $tableName1" . " ORDER BY ID_pelanggan ASC";
      $result = $db->query($query);

      if ($result == true) {
         if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg = $row;
         } else {
            $msg = "No Data Found";
         }
      } else {
         $msg = mysqli_error($db);
      }
   }
   return $msg;
}

$tableName2 = "t_beli";
$columns2 = ['id_beli', 'nama_produk', 'nama_pembeli', 'alamat_pembeli', 'no_hp', 'banyak', 'total'];
$fetchData2 = fetch_data2($db, $tableName2, $columns2);

function fetch_data2($db, $tableName2, $columns2)
{
   if (empty($db)) {
      $msg = "Database connection error";
   } elseif (empty($columns2) || !is_array($columns2)) {
      $msg = "columns Name must be defined in an indexed array";
   } elseif (empty($tableName2)) {
      $msg = "Table Name is empty";
   } else {

      $columnName2 = implode(", ", $columns2);
      $query = "SELECT " . $columnName2 . " FROM $tableName2" . " ORDER BY id_beli ASC";
      $result = $db->query($query);

      if ($result == true) {
         if ($result->num_rows > 0) {
            $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $msg = $row;
         } else {
            $msg = "No Data Found";
         }
      } else {
         $msg = mysqli_error($db);
      }
   }
   return $msg;
}
