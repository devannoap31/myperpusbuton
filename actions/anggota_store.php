<?php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = trim($_POST['nama_anggota']);
    $alamat = trim($_POST['alamat_anggota']);
    
    // Asumsi nilai default sementara, sesuaikan jika form kamu sudah memiliki input ini
    $kode_pendaftaran = 1; 
    $kode_petugas = 1;     
    $tanggal_bergabung = date('Y-m-d');

    $sql = "INSERT INTO masterdata_anggota (nama_anggota, alamat_anggota, kode_pendaftarananggota, kode_petugas, tanggal_bergabung) 
            VALUES (:nama, :alamat, :kode_daftar, :kode_petugas, :tgl)";
    
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([
            ':nama' => $nama,
            ':alamat' => $alamat,
            ':kode_daftar' => $kode_pendaftaran,
            ':kode_petugas' => $kode_petugas,
            ':tgl' => $tanggal_bergabung
        ]);
        
        // PENTING: Set session flash message sebelum redirect
        $_SESSION['success'] = "Data anggota berhasil ditambahkan!";
        
        header("Location: ../views/anggota/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal menyimpan data: " . $e->getMessage());
    }
}
?>