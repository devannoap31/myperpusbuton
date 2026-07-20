<?php
// config/database.php

$host = "localhost";
$dbname = "perpustakaan2_vanno";
$username = "root";
$password = "";

try {
    // Membuat koneksi PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set error mode ke Exception agar error mudah dilacak
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Matikan emulasi prepared statement untuk keamanan ekstra
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}
?>