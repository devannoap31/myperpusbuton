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
$judul_buku = $_POST['judul_buku'];

// Query untuk menghapus data berdasarkan kriteria
$sql = "DELETE FROM masterdata_buku WHERE judul_buku = '$judul_buku'";

if (mysqli_query($koneksi, $sql)) {
    echo "Delete Buku Sukses.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
