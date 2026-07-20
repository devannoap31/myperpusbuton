<?php
session_start();
require_once '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM masterdata_buku WHERE kode_buku = :id";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([':id' => $id]);
        
        $_SESSION['success'] = "Buku berhasil dihapus dari sistem!";
        header("Location: ../views/buku/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal menghapus data buku: " . $e->getMessage());
    }
} else {
    header("Location: ../views/buku/index.php");
    exit();
}
?>