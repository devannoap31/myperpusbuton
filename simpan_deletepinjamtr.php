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
$kode_peminjamanbuku = $_POST['kode_peminjamanbuku'];

// Query untuk menghapus data berdasarkan kriteria
$sql = "DELETE FROM transaksi_peminjamanbuku WHERE kode_peminjamanbuku = '$kode_peminjamanbuku'";

if (mysqli_query($koneksi, $sql)) {
    echo "Delete Denda Sukses.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
