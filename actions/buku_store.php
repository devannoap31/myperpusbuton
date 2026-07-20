<?php
session_start();
require_once '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = trim($_POST['judul_buku']);
    $pengarang = trim($_POST['pengarang_buku']);
    $stok = (int) $_POST['stok_buku'];

    $sql = "INSERT INTO masterdata_buku (judul_buku, pengarang_buku, stok_buku) 
            VALUES (:judul, :pengarang, :stok)";
    
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([
            ':judul' => $judul,
            ':pengarang' => $pengarang,
            ':stok' => $stok
        ]);
        
        $_SESSION['success'] = "Buku baru berhasil ditambahkan ke katalog!";
        header("Location: ../views/buku/index.php");
        exit();
    } catch (PDOException $e) {
        die("Gagal menyimpan data buku: " . $e->getMessage());
    }
}
?>