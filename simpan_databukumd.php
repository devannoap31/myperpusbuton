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

 $judul_buku = $_POST['judul_buku'];
 $pengarang_buku = $_POST['pengarang_buku'];
 $stok_buku = $_POST['stok_buku'];
 $tablename = "masterdata_buku";
 $sql ="INSERT INTO $tablename (judul_buku, pengarang_buku, stok_buku) VALUES ('$judul_buku','$pengarang_buku','$stok_buku')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>