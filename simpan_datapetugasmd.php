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

 $nama_petugas = $_POST['nama_petugas'];
 $alamat_petugas = $_POST['alamat_petugas'];
 $tablename = "masterdata_petugas";
 $sql ="INSERT INTO $tablename (nama_petugas, alamat_petugas) VALUES ('$nama_petugas','$alamat_petugas')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>