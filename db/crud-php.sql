-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2026 at 05:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'mubateknologi1', 'mubatekno1', 'mubatekno1@gmail.com', '$2y$10$Rs3qzqPYvNB13DTeocBnkeoeCLcrVRIwuX0SPHn0KM24YH/fATTVW', '2'),
(4, 'anton saputra', 'anton', 'anton@gmail.com', '$2y$10$nHisRJND0erX3US5glrC2ecbVsP7FJ2ICTssP/6g4PI8evRVA6.uq', '1'),
(5, 'rafif', 'admin', 'ilham@gmail.com', '$2y$10$PHcLtLw9I50kbe1lDJjxu.ZejTa9hNl0sOERJ/KhD8Mw.Q9uBqyZu', '1'),
(6, 'operator barang', 'opmbarang', 'opmbarang@gmail.com', '$2y$10$hGaGzAsbEPREtnreu.tqLOpRcaXR4W3gIop8tlN4sdzNNehqs3GrW', '2'),
(7, 'operator mahasiswa', 'opmahasiswa', 'opmahasiswa@gmail.com', '$2y$10$fANPo6oaHIU9G3HT0/Su.OCY5WZTNIl2W6VbHim3W2S/RWj7JTcey', '3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `jumlah`, `harga`, `barcode`, `tanggal`) VALUES
(7, 'komputer joni', '10', '500000', '4354', '2026-07-02 13:17:45'),
(8, 'laptop joni', '5', '2500000', '334537', '2026-07-04 14:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `prodi`, `jk`, `telepon`, `alamat`, `email`, `foto`) VALUES
(2, 'teknologisekayu', 'informasi', 'perempuan', '0892924693', '', 'teknologi@gmail.com', 'foto.jpg'),
(4, 'putri', 'teknik listrik', 'perempuan', '089922732818', '', 'putri@gmail.com', '6a40be2d560b8.jpg'),
(9, 'apip new', 'teknik informatika', 'Laki-Laki', '1028901231', 'musi banyuasin, sumatra selatan', 'apipbaru@gmail.com', '6a471c5f8b6e1.jpg'),
(10, 'apipganteng', 'teknik listrik', 'laki laki', '0988766', '<p>sekayu jalan jakarta</p>\r\n', 'rafif@gmail.com', '6a4727281c6e7.jpeg'),
(11, 'putri kuning', 'teknik informatika', 'perempuan', '0987652', '<p>gambar alamat<a href=\"/ckfinder/userfiles/images/foto%20alamat/Twibbon%20MPLS%20Kreatif%20Ilustratif%20Biru%20dan%20Merah%20(8).jpg\" target=\"_blank\"><img alt=\"gamabr si putri kuning\" src=\"/ckfinder/userfiles/images/foto%20alamat/Twibbon%20MPLS%20Kreatif%20Ilustratif%20Biru%20dan%20Merah%20(8).jpg\" style=\"height:400px; width:300px\" /></a></p>\r\n', 'kuning@gmail.com', '6a473666a12f6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
