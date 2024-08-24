<?php
include 'koneksi.php';

$kode_buku = $_POST['kode_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang_buku = $_POST['pengarang_buku'];
$stok_buku = $_POST['stok_buku'];

$tablename = "masterdata_buku";
$sql = "UPDATE $tablename SET 
        judul_buku='$judul_buku',
        pengarang_buku='$pengarang_buku',
        stok_buku='$stok_buku'
        WHERE kode_buku='$kode_buku'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
