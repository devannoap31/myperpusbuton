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

$kode_denda = $_POST['kode_denda'];
$keterangan_denda = $_POST['keterangan_denda'];
$tarif_denda = $_POST['tarif_denda'];

$tablename = "masterdata_denda";
$sql = "UPDATE $tablename SET 
        keterangan_denda='$keterangan_denda',
        tarif_denda='$tarif_denda'
        WHERE kode_denda='$kode_denda'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
