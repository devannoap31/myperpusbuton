<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpustakaan2_vanno";

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Memeriksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Mendapatkan nilai yang dimasukkan oleh pengguna
$keterangan_denda = $_POST['keterangan_denda'];

// Query untuk menghapus data berdasarkan kriteria
$sql = "DELETE FROM masterdata_denda WHERE keterangan_denda = '$keterangan_denda'";

if (mysqli_query($koneksi, $sql)) {
    echo "Delete Denda Sukses.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
