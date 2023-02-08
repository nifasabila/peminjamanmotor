-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 09:07 AM
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
-- Database: `db_8febuary23`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_motor`
--

CREATE TABLE `tb_motor` (
  `id_motor` int(11) NOT NULL,
  `nomor_rangka` int(11) NOT NULL,
  `merek` varchar(11) NOT NULL,
  `jenis_motor` varchar(11) NOT NULL,
  `tahun_motor` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_motor`
--

INSERT INTO `tb_motor` (`id_motor`, `nomor_rangka`, `merek`, `jenis_motor`, `tahun_motor`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 47, 'suzuki', 'astrea', 2019, '2023-02-01', '2023-02-08'),
(12, 34, 'hnd', 'astrea', 65, '2023-02-01', '2023-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `id_peminjaman` int(10) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `keperluan` varchar(20) NOT NULL,
  `jaminan` varchar(20) NOT NULL,
  `id_motor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`id_peminjaman`, `nama_peminjam`, `alamat`, `umur`, `keperluan`, `jaminan`, `id_motor`) VALUES
(1, 'rsma', 'dlmn1', 17, 'kredit', 'uang', 1),
(12, 'risma', 'sayung', 15, 'hutang', 'tak tau', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_motor`
--
ALTER TABLE `tb_motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_motor` (`id_motor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_motor`
--
ALTER TABLE `tb_motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `peminjaman_motor` FOREIGN KEY (`id_motor`) REFERENCES `tb_motor` (`id_motor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
