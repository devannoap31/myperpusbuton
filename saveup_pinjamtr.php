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

$kode_peminjamanbuku = $_POST['kode_peminjamanbuku'];
$kode_anggota = $_POST['kode_anggota'];
$kode_buku = $_POST['kode_buku'];
$kode_petugas = $_POST['kode_petugas'];
$tanggal_peminjamanbuku = $_POST['tanggal_peminjamanbuku'];
$tanggal_estimasipengembalianbuku = $_POST['tanggal_estimasipengembalianbuku'];
$jumlah = $_POST['jumlah'];

$tablename = "transaksi_peminjamanbuku";
$sql = "UPDATE $tablename SET 
        kode_anggota='$kode_anggota',
        kode_buku='$kode_buku',
        kode_petugas='$kode_petugas',
        tanggal_peminjamanbuku='$tanggal_peminjamanbuku',
        tanggal_estimasipengembalianbuku='$tanggal_estimasipengembalianbuku',
        jumlah='$jumlah'
        WHERE kode_peminjamanbuku='$kode_peminjamanbuku'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
