<?php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['kode_buku'];
    $judul = trim($_POST['judul_buku']);
    $pengarang = trim($_POST['pengarang_buku']);
    $stok = (int) $_POST['stok_buku'];

    $sql = "UPDATE masterdata_buku SET 
            judul_buku = :judul, 
            pengarang_buku = :pengarang,
            stok_buku = :stok
            WHERE kode_buku = :id";
            
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([
            ':judul' => $judul,
            ':pengarang' => $pengarang,
            ':stok' => $stok,
            ':id' => $id
        ]);
        
        $_SESSION['success'] = "Data buku berhasil diperbarui!";
        header("Location: ../views/buku/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal mengupdate data buku: " . $e->getMessage());
    }
}
?>