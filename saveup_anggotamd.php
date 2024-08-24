<?php
include 'koneksi.php';

$kode_anggota = $_POST['kode_anggota'];
$nama_anggota = $_POST['nama_anggota'];
$alamat_anggota = $_POST['alamat_anggota'];
$kode_pendaftarananggota = $_POST['kode_pendaftarananggota'];
$kode_petugas = $_POST['kode_petugas'];
$tanggal_bergabung = $_POST['tanggal_bergabung'];

$tablename = "masterdata_anggota";
$sql = "UPDATE $tablename SET 
        nama_anggota='$nama_anggota',
        alamat_anggota='$alamat_anggota',
        kode_pendaftarananggota='$kode_pendaftarananggota',
        kode_petugas='$kode_petugas',
        tanggal_bergabung='$tanggal_bergabung'
        WHERE kode_anggota='$kode_anggota'";

if (mysqli_query($koneksi, $sql)) {
  echo "Sukses Update data";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
