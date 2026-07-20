<?php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['kode_anggota'];
    $nama = trim($_POST['nama_anggota']);
    $alamat = trim($_POST['alamat_anggota']);

    $sql = "UPDATE masterdata_anggota SET 
            nama_anggota = :nama, 
            alamat_anggota = :alamat 
            WHERE kode_anggota = :id";
            
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([
            ':nama' => $nama,
            ':alamat' => $alamat,
            ':id' => $id
        ]);
        
        // PENTING: Set session flash message sebelum redirect
        $_SESSION['success'] = "Data anggota berhasil diperbarui!";
        
        header("Location: ../views/anggota/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal mengupdate data: " . $e->getMessage());
    }
}
?>