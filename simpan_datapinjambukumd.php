<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan2_vanno";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}

 $kode_anggota = $_POST['kode_anggota'];
 $kode_buku = $_POST['kode_buku'];
 $kode_petugas = $_POST['kode_petugas'];
 $tanggal_peminjamanbuku = $_POST['tanggal_peminjamanbuku'];
 $tanggal_estimasipengembalianbuku = $_POST['tanggal_estimasipengembalianbuku'];
 $jumlah = $_POST['jumlah'];
 $tablename = "transaksi_peminjamanbuku";
 $sql ="INSERT INTO $tablename (kode_anggota, kode_buku, kode_petugas, tanggal_peminjamanbuku, tanggal_estimasipengembalianbuku, jumlah) VALUES ('$kode_anggota','$kode_buku','$kode_petugas','$tanggal_peminjamanbuku','$tanggal_estimasipengembalianbuku','$jumlah')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>