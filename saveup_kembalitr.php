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

$kode_pengembalianbuku = $_POST['kode_pengembalianbuku'];
$kode_peminjamanbuku = $_POST['kode_peminjamanbuku'];
$tanggal_pengembalianbuku = $_POST['tanggal_pengembalianbuku'];
$jumlah = $_POST['jumlah'];

$tablename = "transaksi_pengembalianbuku";
$sql = "UPDATE $tablename SET 
        kode_peminjamanbuku='$kode_peminjamanbuku',
        tanggal_pengembalianbuku='$tanggal_pengembalianbuku',
        jumlah='$jumlah'
        WHERE kode_pengembalianbuku='$kode_pengembalianbuku'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
