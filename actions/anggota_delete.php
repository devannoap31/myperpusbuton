<?php
session_start();
require_once '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM masterdata_anggota WHERE kode_anggota = :id";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([':id' => $id]);
        
        // PENTING: Set session flash message sebelum redirect
        $_SESSION['success'] = "Data anggota berhasil dihapus!";
        
        header("Location: ../views/anggota/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal menghapus data: " . $e->getMessage());
    }
} else {
    header("Location: ../views/anggota/index.php");
    exit();
}
?>