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

 $nama_anggota = $_POST['nama_anggota'];
 $alamat_anggota = $_POST['alamat_anggota'];
 $kode_pendaftarananggota = $_POST['kode_pendaftarananggota'];
 $kode_petugas = $_POST['kode_petugas'];
 $tanggal_bergabung = $_POST['tanggal_bergabung'];
 $tablename = "masterdata_anggota";
 $sql ="INSERT INTO $tablename (nama_anggota, alamat_anggota, kode_pendaftarananggota, kode_petugas, tanggal_bergabung) VALUES ('$nama_anggota','$alamat_anggota','$kode_pendaftarananggota','$kode_petugas','$tanggal_bergabung')";

//$sql = "INSERT INTO tamu (nama,email,alamat,pesan)
//VALUES ('jojon', 'Doe@gmail.com','solo', 'ok bos')";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Input data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>