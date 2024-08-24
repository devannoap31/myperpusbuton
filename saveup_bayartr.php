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

$kode_pembayarandenda = $_POST['kode_pembayarandenda'];
$kode_pengembalianbuku = $_POST['kode_pengembalianbuku'];
$kode_denda = $_POST['kode_denda'];
$tanggal_pembayarandenda = $_POST['tanggal_pembayarandenda'];

$tablename = "transaksi_pembayarandenda";
$sql = "UPDATE $tablename SET 
        kode_pengembalianbuku='$kode_pengembalianbuku',
        kode_denda='$kode_denda',
        tanggal_pembayarandenda='$tanggal_pembayarandenda'
        WHERE kode_pembayarandenda='$kode_pembayarandenda'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
