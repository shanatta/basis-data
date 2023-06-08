-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 05:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualanbuah`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buah`
--

CREATE TABLE `tbl_buah` (
  `id_buah` int(11) NOT NULL,
  `nama_buah` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buah`
--

INSERT INTO `tbl_buah` (`id_buah`, `nama_buah`, `jenis`, `harga`) VALUES
(1, 'Jeruk Mandarin', 'Import', '24.980'),
(2, 'Sirsak', 'Lokal', '23.500'),
(3, 'Kelengkeng Bangkok', 'Import', '65.000'),
(4, 'Pisang Ambon', 'Lokal', '30.000'),
(5, 'Belimbing', 'Lokal', '11.950'),
(6, 'Semangka', 'Import', '20.000'),
(7, 'Lemon', 'Import', '20.000'),
(8, 'Blewah', 'Lokal', '15.000'),
(9, 'Nanas', 'Lokal', '12.900'),
(10, 'Durian Monthong', 'Lokal', '65.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hargabuah`
--

CREATE TABLE `tbl_hargabuah` (
  `id_buah` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `jumlah_beli` int(255) NOT NULL,
  `total_beli` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hargabuah`
--

INSERT INTO `tbl_hargabuah` (`id_buah`, `id_pembeli`, `jumlah_beli`, `total_beli`, `tanggal`) VALUES
(1, 1, 1, '24.980', '2023-05-17'),
(2, 2, 3, '70.500', '2023-05-26'),
(3, 3, 2, '130.000', '2023-05-29'),
(4, 4, 1, '30.000', '2023-05-30'),
(5, 2, 4, '47.800', '2023-05-26'),
(6, 5, 2, '18.000', '2023-05-27'),
(7, 6, 1, '20.000', '2023-05-10'),
(8, 3, 3, '45.000', '2023-05-05'),
(9, 1, 1, '12.900', '2023-05-26'),
(10, 8, 5, '325.000', '2023-06-01'),
(6, 6, 1, '20.000', '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `telp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id_pembeli`, `nama_pembeli`, `telp`) VALUES
(1, 'Zakaria Adi', 87263149),
(2, 'Aris Seth', 87728649),
(3, 'Wiwin Dermawan', 87729839),
(4, 'Seffy Kusuma', 89273859),
(6, 'Eko Setiawan', 87209732),
(7, 'Kanaya Adirama', 87263687),
(8, 'Devi Nat', 80098732);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buah`
--
ALTER TABLE `tbl_buah`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_buah`
--
ALTER TABLE `tbl_buah`
  MODIFY `id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
