-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 06:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan2_vanno`
--

-- --------------------------------------------------------

--
-- Table structure for table `masterdata_anggota`
--

CREATE TABLE `masterdata_anggota` (
  `kode_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `alamat_anggota` varchar(20) DEFAULT NULL,
  `kode_pendaftarananggota` int(11) NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `tanggal_bergabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterdata_anggota`
--

INSERT INTO `masterdata_anggota` (`kode_anggota`, `nama_anggota`, `alamat_anggota`, `kode_pendaftarananggota`, `kode_petugas`, `tanggal_bergabung`) VALUES
(3, 'Meylianawati', 'Madiun', 3, 3, '2020-01-01'),
(5, 'Kinantan', 'Semarang', 5, 5, '2020-01-01'),
(6, 'Irsyad', 'Tegal', 6, 6, '2020-01-01'),
(7, 'Novita', 'Salatiga', 7, 7, '2020-01-01'),
(8, 'Azzahwa', 'Boyolali', 8, 8, '2020-01-01'),
(9, 'Sahza', 'Jepara', 9, 9, '2020-01-01'),
(11, 'Sri', 'Delingan', 10, 8, '2023-09-20'),
(13, 'Riski', 'Jogja', 11, 10, '0009-09-09'),
(15, 'Dwi', 'Pasar Kliwon', 14, 4, '2021-03-08'),
(17, 'Mekel', 'Colomadu', 15, 6, '2022-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `masterdata_buku`
--

CREATE TABLE `masterdata_buku` (
  `kode_buku` int(11) NOT NULL,
  `judul_buku` varchar(20) DEFAULT NULL,
  `pengarang_buku` varchar(20) DEFAULT NULL,
  `stok_buku` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterdata_buku`
--

INSERT INTO `masterdata_buku` (`kode_buku`, `judul_buku`, `pengarang_buku`, `stok_buku`) VALUES
(1, 'Kerja', 'Salsabila', 1),
(2, 'Ternak Landak', 'Achmad Rinda', 2),
(3, 'Budidaya Nila', 'Supardono', 2),
(4, 'Era OrBa', 'Hartotin', 2),
(5, 'Industri 4.0', 'Mark Zulkifli', 2),
(6, 'Kumpulan Puisi', 'Senja Putri', 2),
(7, 'Kunci Surga', 'Syafir', 2),
(8, 'Pengalaman', 'Yoga', 2),
(9, 'Cara Komunikasi', 'Josua Putra', 2),
(10, 'Tanda Kiamat', 'Dwi Septi', 2),
(11, 'Python', 'Shin Taeyong', 2);

-- --------------------------------------------------------

--
-- Table structure for table `masterdata_denda`
--

CREATE TABLE `masterdata_denda` (
  `kode_denda` int(11) NOT NULL,
  `keterangan_denda` varchar(20) DEFAULT NULL,
  `tarif_denda` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterdata_denda`
--

INSERT INTO `masterdata_denda` (`kode_denda`, `keterangan_denda`, `tarif_denda`) VALUES
(1, 'Hilang', '500k'),
(3, 'Basah', '75k'),
(4, 'Tercoret', '25k'),
(5, 'Tertekuk', '30k'),
(6, 'T1', '10k'),
(7, 'T2', '25k'),
(8, 'T3', '50k'),
(9, 'T4', '110k'),
(10, 'T5', '240k'),
(12, 'Dibakar', '80k');

-- --------------------------------------------------------

--
-- Table structure for table `masterdata_petugas`
--

CREATE TABLE `masterdata_petugas` (
  `kode_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(20) DEFAULT NULL,
  `alamat_petugas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterdata_petugas`
--

INSERT INTO `masterdata_petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`) VALUES
(1, 'Fajarr', 'Sondakan'),
(2, 'Rusdi', 'Pajang'),
(3, 'Wati', 'Lampung'),
(4, 'Obama', 'USS'),
(5, 'Agus', 'Gandekan'),
(6, 'Sigit', 'Pucang Sawit'),
(7, 'Farhan', 'Sangkrah'),
(8, 'Dina', 'Mojo'),
(9, 'Sari', 'Tipes'),
(10, 'Bayu', 'Wonogiri'),
(11, 'Damar', 'Jayapura');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembayarandenda`
--

CREATE TABLE `transaksi_pembayarandenda` (
  `kode_pembayarandenda` int(11) NOT NULL,
  `kode_pengembalianbuku` int(11) NOT NULL,
  `kode_denda` int(11) NOT NULL,
  `tanggal_pembayarandenda` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pembayarandenda`
--

INSERT INTO `transaksi_pembayarandenda` (`kode_pembayarandenda`, `kode_pengembalianbuku`, `kode_denda`, `tanggal_pembayarandenda`) VALUES
(5, 5, 3, '2024-08-07'),
(6, 6, 3, '2020-07-25'),
(8, 8, 4, '2020-07-25'),
(9, 9, 5, '2020-07-25'),
(13, 11, 4, '2023-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjamanbuku`
--

CREATE TABLE `transaksi_peminjamanbuku` (
  `kode_peminjamanbuku` int(11) NOT NULL,
  `kode_anggota` int(11) NOT NULL,
  `kode_buku` int(11) NOT NULL,
  `kode_petugas` int(11) NOT NULL,
  `tanggal_peminjamanbuku` date NOT NULL,
  `tanggal_estimasipengembalianbuku` date NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_peminjamanbuku`
--

INSERT INTO `transaksi_peminjamanbuku` (`kode_peminjamanbuku`, `kode_anggota`, `kode_buku`, `kode_petugas`, `tanggal_peminjamanbuku`, `tanggal_estimasipengembalianbuku`, `jumlah`) VALUES
(3, 3, 3, 3, '2020-07-21', '2024-08-21', 0),
(5, 5, 5, 5, '2020-07-21', '2020-07-24', 1),
(6, 6, 6, 6, '2020-07-21', '2020-07-24', 1),
(7, 7, 7, 7, '2020-07-21', '2020-07-24', 1),
(8, 8, 8, 8, '2020-07-21', '2020-07-24', 1),
(9, 9, 9, 9, '2020-07-21', '2020-07-24', 1),
(11, 3, 4, 5, '2023-09-07', '2023-09-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pengembalianbuku`
--

CREATE TABLE `transaksi_pengembalianbuku` (
  `kode_pengembalianbuku` int(11) NOT NULL,
  `kode_peminjamanbuku` int(11) NOT NULL,
  `tanggal_pengembalianbuku` date DEFAULT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pengembalianbuku`
--

INSERT INTO `transaksi_pengembalianbuku` (`kode_pengembalianbuku`, `kode_peminjamanbuku`, `tanggal_pengembalianbuku`, `jumlah`) VALUES
(3, 3, '2024-08-21', 2),
(5, 5, '2020-07-24', 1),
(6, 6, '2020-07-24', 1),
(7, 7, '2020-07-24', 1),
(8, 8, '2020-07-24', 1),
(9, 8, '2023-09-13', 1),
(11, 9, '2023-09-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masterdata_anggota`
--
ALTER TABLE `masterdata_anggota`
  ADD PRIMARY KEY (`kode_anggota`),
  ADD KEY `fk_anggota_petugas` (`kode_petugas`);

--
-- Indexes for table `masterdata_buku`
--
ALTER TABLE `masterdata_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `masterdata_denda`
--
ALTER TABLE `masterdata_denda`
  ADD PRIMARY KEY (`kode_denda`);

--
-- Indexes for table `masterdata_petugas`
--
ALTER TABLE `masterdata_petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- Indexes for table `transaksi_pembayarandenda`
--
ALTER TABLE `transaksi_pembayarandenda`
  ADD PRIMARY KEY (`kode_pembayarandenda`),
  ADD KEY `fk_bayar_kembali` (`kode_pengembalianbuku`),
  ADD KEY `fk_bayar_denda` (`kode_denda`);

--
-- Indexes for table `transaksi_peminjamanbuku`
--
ALTER TABLE `transaksi_peminjamanbuku`
  ADD PRIMARY KEY (`kode_peminjamanbuku`),
  ADD KEY `fk_pinjam_petugas` (`kode_petugas`),
  ADD KEY `fk_pinjam_buku` (`kode_buku`),
  ADD KEY `fk_pinjam_anggota` (`kode_anggota`);

--
-- Indexes for table `transaksi_pengembalianbuku`
--
ALTER TABLE `transaksi_pengembalianbuku`
  ADD PRIMARY KEY (`kode_pengembalianbuku`),
  ADD KEY `fk_kembali_pinjam` (`kode_peminjamanbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masterdata_anggota`
--
ALTER TABLE `masterdata_anggota`
  MODIFY `kode_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `masterdata_buku`
--
ALTER TABLE `masterdata_buku`
  MODIFY `kode_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `masterdata_denda`
--
ALTER TABLE `masterdata_denda`
  MODIFY `kode_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `masterdata_petugas`
--
ALTER TABLE `masterdata_petugas`
  MODIFY `kode_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi_pembayarandenda`
--
ALTER TABLE `transaksi_pembayarandenda`
  MODIFY `kode_pembayarandenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi_peminjamanbuku`
--
ALTER TABLE `transaksi_peminjamanbuku`
  MODIFY `kode_peminjamanbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi_pengembalianbuku`
--
ALTER TABLE `transaksi_pengembalianbuku`
  MODIFY `kode_pengembalianbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `masterdata_anggota`
--
ALTER TABLE `masterdata_anggota`
  ADD CONSTRAINT `fk_anggota_petugas` FOREIGN KEY (`kode_petugas`) REFERENCES `masterdata_petugas` (`kode_petugas`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_pembayarandenda`
--
ALTER TABLE `transaksi_pembayarandenda`
  ADD CONSTRAINT `fk_bayar_denda` FOREIGN KEY (`kode_denda`) REFERENCES `masterdata_denda` (`kode_denda`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_bayar_kembali` FOREIGN KEY (`kode_pengembalianbuku`) REFERENCES `transaksi_pengembalianbuku` (`kode_pengembalianbuku`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_peminjamanbuku`
--
ALTER TABLE `transaksi_peminjamanbuku`
  ADD CONSTRAINT `fk_pinjam_anggota` FOREIGN KEY (`kode_anggota`) REFERENCES `masterdata_anggota` (`kode_anggota`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pinjam_buku` FOREIGN KEY (`kode_buku`) REFERENCES `masterdata_buku` (`kode_buku`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_pinjam_petugas` FOREIGN KEY (`kode_petugas`) REFERENCES `masterdata_petugas` (`kode_petugas`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi_pengembalianbuku`
--
ALTER TABLE `transaksi_pengembalianbuku`
  ADD CONSTRAINT `fk_kembali_pinjam` FOREIGN KEY (`kode_peminjamanbuku`) REFERENCES `transaksi_peminjamanbuku` (`kode_peminjamanbuku`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
