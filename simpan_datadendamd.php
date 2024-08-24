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

 $keterangan_denda = $_POST['keterangan_denda'];
 $tarif_denda = $_POST['tarif_denda'];
 $tablename = "masterdata_denda";
 $sql ="INSERT INTO $tablename (keterangan_denda, tarif_denda) VALUES ('$keterangan_denda','$tarif_denda')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>