<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "perpustakaan2_vanno";

// // Create connection
// $koneksi = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$koneksi) {
//   die("Connection failed: " . mysqli_connect_error());
// }
include 'koneksi.php';

$kode_petugas = $_POST['kode_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$alamat_petugas = $_POST['alamat_petugas'];

$tablename = "masterdata_petugas";
$sql = "UPDATE $tablename SET 
        nama_petugas='$nama_petugas',
        alamat_petugas='$alamat_petugas'
        WHERE kode_petugas='$kode_petugas'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>