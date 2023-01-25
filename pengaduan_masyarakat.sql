-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 03:17 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `id_aduan` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `judul` text,
  `aduan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` enum('diproses','ditanggapi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id_aduan`, `nama`, `email`, `judul`, `aduan`, `status`) VALUES
(1, 'rudy santoso', 'ryan@email.com', NULL, 'test', 'ditanggapi'),
(2, 'ryan wijaya', 'ryanwijaya98@gmail.com', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet orci vehicula, condimentum est cursus, ullamcorper felis. Nunc at euismod nisi, eu rhoncus urna. Morbi lobortis eleifend facilisis. Maecenas sit amet odio magna. Aliquam erat volutpat. Sed tincidunt mattis lectus, ac convallis erat. Phasellus consectetur euismod tellus, et consequat ante cursus vitae. Suspendisse sit amet nibh nibh. Praesent porta venenatis tempus. Mauris vulputate varius semper. Praesent eros mauris, vulputate nec magna vitae, gravida congue magna.\r\n\r\nPellentesque ut sapien rutrum, aliquam augue sed, sagittis nisi. Aliquam convallis consequat risus aliquam facilisis. Vivamus bibendum est diam, vel dignissim risus auctor at. Nullam quam velit, auctor a risus ac, pharetra bibendum odio. Aenean ligula quam, cursus cursus tempor ac, varius nec enim. Aliquam pulvinar lorem sapien, at bibendum dolor volutpat nec. Fusce aliquet rutrum laoreet. Fusce tincidunt aliquam velit nec convallis.\r\n\r\nCras quis augue vel diam tincidunt rhoncus. Cras at justo vel lorem vestibulum sollicitudin ac ut lacus. Vestibulum imperdiet id nulla ac condimentum. Mauris in laoreet massa, sit amet tincidunt tellus. Nullam nec orci rhoncus, venenatis nisl malesuada, consectetur est. Vestibulum augue felis, pretium quis ullamcorper vitae, tempor sit amet leo. Phasellus auctor lorem at diam eleifend varius.', 'diproses'),
(3, 'toni', 'toni999@email.com', 'ini judul laporan toni', 'create table petugas(\r\n    id_petugas int not null primary key AUTO_INCREMENT,\r\n    id_level int not null,\r\n    nama_petugas varchar(35),\r\n    username varchar(32),\r\n    email varchar(32),\r\n    telp varchar(13),\r\n    password varchar(32),\r\n    foreign key (id_level) REFERENCES level(id_level));\r\n    \r\n    ', 'diproses'),
(4, 'surya nata', 'suryanata@email.com', 'longsor jalan maju gang buntu', 'tanah longsor pak, halo!', 'diproses'),
(5, 'halo halo', 'halo@email.com', 'ini judul laporan baru dari halo', 'halo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halo', 'diproses'),
(6, 'halo', 'halo@email.com', 'judul laporan baru', 'halo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halohalo halo halo halo', 'diproses'),
(7, 'nen ganen', 'nenganen@email.com', 'laporan ganen', 'hadehh cape aing', 'diproses');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int NOT NULL,
  `nama_level` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'petugas'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int NOT NULL,
  `id_level` int NOT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `username` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `id_level`, `nama_petugas`, `username`, `email`, `telp`, `password`) VALUES
(1, 2, 'petugas lima', 'petugas 5', 'petugaslima@email.com', '8123456789', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 2, 'admin', 'admin', 'admin@admin.com', '8123456789', '0192023a7bbd73250516f069df18b500'),
(3, 1, 'petugas dua', 'petugas2', 'petugasdua@email.com', '123456789', 'Petugas123'),
(4, 1, 'petugas tiga', 'petugas3', 'petugastiga@email.com', '123456789', '6b3402d7cea9dfb83a5278657380082e');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int NOT NULL,
  `id_aduan` int NOT NULL,
  `id_petugas` int NOT NULL,
  `tgl_tanggapan` date DEFAULT NULL,
  `tanggapan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_aduan`, `id_petugas`, `tgl_tanggapan`, `tanggapan`) VALUES
(1, 1, 2, '2023-01-25', 'laporan ditanggapi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_aduan` (`id_aduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `id_aduan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`);

--
-- Constraints for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_aduan`) REFERENCES `aduan` (`id_aduan`),
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
