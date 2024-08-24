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

 $kode_peminjamanbuku = $_POST['kode_peminjamanbuku'];
 $tanggal_pengembalianbuku = $_POST['tanggal_pengembalianbuku'];
 $jumlah = $_POST['jumlah'];
 $tablename = "transaksi_pengembalianbuku";
 $sql ="INSERT INTO $tablename (kode_peminjamanbuku, tanggal_pengembalianbuku, jumlah) VALUES ('$kode_peminjamanbuku','$tanggal_pengembalianbuku','$jumlah')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>